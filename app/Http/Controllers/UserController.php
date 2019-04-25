<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;

use App\Portfolio;
use App\Qualification;
use App\Message;
use App\User;
use App\AccountSubject;
use App\Subject;

class UserController extends Controller
{
    // Business logic needs to be performed in the controller as shown in the function below. The resulting data is then passed to
    // the view to avoid performing unnecessary work in the view file
    public function myprofile()
    {
        // Retrieve the portfolio for this user from our Portfolio model
        $portfolio = Portfolio::where('AccountId', Auth::id())->first();
        
        // If the user doesn't have a portfolio, use a default qualification object (this will not be added to the database, if we wish to do this, we use Qualification::Create())
        if(empty($portfolio))
        {
            $qualification = new Qualification();
            $qualification->QualificationTitle = 'No Qualifications Found';
            $qualification->InstitutionName = 'N/A';
            $qualifications = [$qualification];
        }
        
        // If the user does have a portfolio, try retrieve their qualifications from it
        else
        {
            $qualifications = Qualification::where('PortfolioId', $portfolio->PortfolioId)->get();
            
            // If the portfolio doesn't have any qualifications associated with it, use a default qualification object
            if(empty($portfolio))
            {
                $qualification = new Qualification();
                $qualification->QualificationTitle = 'No Qualifications Found';
                $qualification->InstitutionName = 'N/A';
                $qualifications = [$qualification];
            }
        }
        
        // Retrieve the subject preferences
        $accountSubjects = AccountSubject::where('AccountId', Auth::id())->get();
        
        // Retrieve the subjects themselves
        $subjects = Subject::all();
              
        // Create the myprofile view and pass it the qualifications to display          
    	return view('myprofile', [
    	    'user' => Auth::user(),
    	    'qualifications' => $qualifications,
    	    'accountSubjects' => $accountSubjects,
    	    'subjects' => $subjects]);
    }
    
    public function myprofileUpdatePreferences(Request $request)
    {
        // Get all the subjects
        $subjectsToDelete = Subject::all();
        $subjectsToAdd = [];
        
        // Get the preferences from the request
        $items = $request->all();
        
        // Iterate through all the subjects
        foreach($subjectsToDelete as $key => $subject)
        {
            // See if there is a reference to this subject in the selected preferences
            if(in_array($subject->SubjectId , $items))
            {
                // This subject is checked, keep it
                array_push($subjectsToAdd, $subjectsToDelete->pull($key));
            }
        }
        
        // Get existing preferences
        $accountSubjects = AccountSubject::where('AccountId', Auth::id())->get();
        
        foreach($subjectsToDelete as $subjectToDelete)
        {
            // Find if there is an association between this account and this subject
            $accountSubject = $accountSubjects->where('SubjectId', $subjectToDelete->SubjectId)->first();
            if(!empty($accountSubject))
            {
                // There is, delete it
                $accountSubject->delete();
            }
        }
        
        foreach($subjectsToAdd as $subjectToAdd)
        {
            // Create a new association between this subject and this user
            $accountSubject = new AccountSubject();
            $accountSubject->SubjectId = $subjectToAdd->SubjectId;
            $accountSubject->AccountId = Auth::id();
            $accountSubject->save();
        }
        
        return redirect()->to('/myprofile');
    }
    
    public function inbox()
    {
        // Retrieve a collection of messages associated with this account
        $messages = Message::where('AccountId', Auth::id())->get();
        
        return view('mymail', ['messages' => $messages]);
    }
    
    public function message($id)
    {
        // Retrieve the message for this id
        $message = Message::where('MailId', $id)->first();
        
        if(!empty($message))
        {
            // Mark the message as read now that the user has requested the view for it
            $message->Read = 1;
            $message->save();
        }
        
        return view('message', ['message' => $message]);
    }

    public function update_avatar(Request $request){

    	// Handle the user upload of avatar
    	if($request->hasFile('avatar')){
    		$avatar = $request->file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );

    		$myprofile = Auth::user();
    		$myprofile->avatar = $filename;
    		$myprofile->save();
    	}

    	return redirect()->to('/myprofile');

    }
    
}