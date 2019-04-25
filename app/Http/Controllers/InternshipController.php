<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\AccountSubject;
use App\Opportunity;
use App\Experience;
use App\Qualification;
use App\Portfolio;
use App\Expression;
use Auth;

class InternshipController extends Controller
{
    public function eoi()
    {
        // Get this user's expressions of interest
        $expressions = Expression::where('AccountId', Auth::id())->get();
        
        // Get the opportunities associated with this user's expressions of interest
        $opportunities = new Collection();
        foreach($expressions as $e)
        {
            // Add this opportunity to the collection
            $opportunities->push(Opportunity::where('OpportunityId', $e->OpportunityId)->first());
        }
        
        return view('eoi', [
            'expressions' => $expressions,
            'opportunities' => $opportunities
        ]);
    }
    
    public function opportunities()
    {
        // Get a list of the connections between the user and their subjects
        $accountSubjects = AccountSubject::where('AccountId', Auth::id())->get();
        
        if($accountSubjects->count() < 1)
        {
            return view('opportunities', ['opportunities' => new Collection()]);
        }
        
        $first = true;
        foreach($accountSubjects as $as)
        {
            // Get a list of opportunities for this subject
            $temp = Opportunity::where('SubjectId', $as->SubjectId)->get();
            
            if($first)
            {
                // $opportunities doesn't exist yet, so we create it
                $first = false;
                $opportunities = $temp;
                
            }
            else
            {
                // $opportunities already exists, so we merge this collection with it
                $opportunities = $opportunities->toBase()->merge($temp);
            }
        }
        
        // Instantiate the view with a list of relevant opportunities
        return view('opportunities', ['opportunities' => $opportunities]);
    }
    
    public function opportunitydetail($id)
    {
        // Retrieve the opportunity for this id
        $opportunity = Opportunity::where('OpportunityId', $id)->first();
        
        return view('opportunitydetail', ['opportunity' => $opportunity]);
    }
    
    public function intport()
    {
        // Get the user's portfolio
        $portfolio = Portfolio::where('AccountId', Auth::id())->first();
        
        if(empty($portfolio))
        {
            return view('intport', [
                'experiences' => new Collection(),
                'qualifications' => new Collection()
            ]);
        }
        
        // Get a list of the user's experiences
        $experiences = Experience::where('PortfolioId', $portfolio->PortfolioId)->get();
        
        // Get a list of the user's qualifications
        $qualifications = Qualification::where('PortfolioId', $portfolio->PortfolioId)->get();
        
        return view('intport', [
            'experiences' => $experiences,
            'qualifications' => $qualifications
        ]);
    }
    
    public function addQualification(Request $request)
    {
        // Get the user's portfolio
        $portfolio = Portfolio::where('AccountId', Auth::id())->first();
        
        if(empty($portfolio))
        {
            $portfolio = new Portfolio();
            $portfolio->AccountId = Auth::id();
            $portfolio->save();
        }
        
        // Create a database entry for this request
        $qualification = new Qualification();
        $qualification->PortfolioId = $portfolio->PortfolioId;
        $qualification->QualificationTitle = $request->qualificationTitle;
        $qualification->InstitutionName = $request->institutionName;
        $qualification->save();
        
        return redirect()->to('/intport');
    }
    
    public function deleteQualification(Request $request)
    {
        // Get the qualification from the db
        $qualification = Qualification::where('QualificationId', $request->qualificationId)->first();
        
        // Delete the record
        $qualification->delete();
        
        return redirect()->to('/intport');
    }
    
    public function addExperience(Request $request)
    {
        // Get the user's portfolio
        $portfolio = Portfolio::where('AccountId', Auth::id())->first();
        
        if(empty($portfolio))
        {
            $portfolio = new Portfolio();
            $portfolio->AccountId = Auth::id();
            $portfolio->save();
            
            // Get the user's portfolio
            $portfolio = Portfolio::where('AccountId', Auth::id())->first();
        }
        
        // Create a database entry for this request
        $experience = new Experience();
        $experience->PortfolioId = $portfolio->PortfolioId;
        $experience->JobTitle = $request->jobTitle;
        $experience->WorkplaceName = $request->workplace;
        $experience->StartDate = $request->startDate;
        $experience->EndDate = $request->endDate;
        $experience->JobDescription = $request->jobDescription;
        $experience->save();
        
        return redirect()->to('/intport');
    }
    
    public function deleteExperience(Request $request)
    {
        // Get the qualification from the db
        $experience = Experience::where('ExperienceId', $request->experienceId)->first();
        
        // Delete the record
        $experience->delete();
        
        return redirect()->to('/intport');
    }
    
    public function addExpression(Request $request)
    {
        $expression = new Expression();
        $expression->AccountId = Auth::id();
        $expression->OpportunityId = $request->opportunityId;
        $expression->save();
        
        return redirect()->to('/eoi');
    }
}