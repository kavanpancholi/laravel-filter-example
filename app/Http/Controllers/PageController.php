<?php

namespace App\Http\Controllers;

use App\Models\CandidateProfile;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request)
    {
        $filters = $request->query->all();

        $candidates = CandidateProfile::query()
            ->when(isset($filters['keyword']), function ($query) use ($filters) {
                $keyword = $filters['keyword'];
                $query->where('name', 'LIKE', "%$keyword%")
                    ->orWhere('email', 'LIKE', "%$keyword%")
                    ->orWhere('address', 'LIKE', "%$keyword%")
                    ->orWhereRaw('LOWER(key_skills) LIKE ?', ["%$keyword%"]);
            })
            ->when(isset($filters['min_salary'], $filters['max_salary']), function ($query) use ($filters) {
                $minPrice = $filters['min_salary'];
                $maxPrice = $filters['max_salary'];
                $query->whereBetween('expected_salary', [$minPrice, $maxPrice]);
            })
            ->when(isset($filters['location']), function ($query) use ($filters) {
                $location = $filters['location'];
                $query->where('location', $location);
            })
            ->when(isset($filters['experience']), function ($query) use ($filters) {
                $experience = $filters['experience'];
                $query->whereRaw('work_exp_range_to - work_exp_range_from >= ?', [$experience]);
            })
            ->when(isset($filters['functional_area']), function ($query) use ($filters) {
                $functionalArea = $filters['functional_area'];
                $query->where('functional_area', $functionalArea);
            })
            ->when(isset($filters['current_department']), function ($query) use ($filters) {
                $functionalArea = $filters['current_department'];
                $query->where('current_department', $functionalArea);
            })
            ->when(isset($filters['current_company']), function ($query) use ($filters) {
                $functionalArea = $filters['current_company'];
                $query->where('current_company', $functionalArea);
            })
            ->when(isset($filters['industry']), function ($query) use ($filters) {
                $industry = $filters['industry'];
                $query->where('industry', $industry);
            })
            ->paginate(16);

        $locations = CandidateProfile::pluck('location');
        $industries = config('app.industries');
        $functionalAreas = config('app.area');
        $companies = config('app.companies');
        $departments = config('app.departments');
        $salaryRanges = config('app.salary_range');

        return view('welcome', [
            'candidates' => $candidates,
            'locations' => $locations,
            'filters' => $filters,
            'industries' => $industries,
            'functionalAreas' => $functionalAreas,
            'departments' => $departments,
            'companies' => $companies,
            'salaryRanges' => $salaryRanges,
        ]);
    }
}
