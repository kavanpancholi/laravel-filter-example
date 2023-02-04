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
                    ->orWhere('key_skills', 'LIKE', "%$keyword%");
            })
            ->when(isset($filters['min-price'], $filters['max-price']), function ($query) use ($filters) {
                $minPrice = $filters['min-price'];
                $maxPrice = $filters['max-price'];
                $query->whereBetween('salary_range_from', [$minPrice, $maxPrice])
                    ->orWhereBetween('salary_range_to', [$minPrice, $maxPrice]);
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

        return view('welcome', [
            'candidates' => $candidates,
            'locations' => $locations,
            'filters' => $filters,
            'industries' => $industries,
            'functionalAreas' => $functionalAreas,
            'departments' => $departments,
            'companies' => $companies,
        ]);
    }
}
