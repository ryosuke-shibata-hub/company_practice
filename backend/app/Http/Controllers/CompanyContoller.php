<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $companies = Company::paginate(5);

        return view('login.User.Company.index')
        ->with('companies',$companies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('login.User.Company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request -> validate([
            'name' => 'required','string',
            'email' => 'required','string','email',
            'website' => 'required',
            'file' => 'required','image','file',
        ]);

        if($file = $request->file) {
            $fileName = time().$file->getClientOriginalName();
            $target_path = public_path('uploads/');
            $file->move($target_path,$fileName);
        }else{
            $fileName = "";
        }

        $company = new Company;
        $company->name = $request->name;
        $company->email = $request->email;
        $company->website = $request->website;
        $company->logo =  $fileName;

        $company->save();

        return redirect('/companies');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $company = Company::findOrFail($id);

        return view('login.User.Company.edit')
        ->with('company',$company);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //
        $request->validate([
            'name' => 'required','string',
            'email' => 'required','string','email',
            'website' => 'required',
            'file' => 'required','image','file',
        ]);

        if($file = $request->file) {
            $fileName = time().$file->getClientOriginalName();
            $target_path = public_path('uploads/');
            $file->move($target_path,$fileName);
        }else{
            $fileName = "";
        }

        $company = Company::findOrFail($id);

        $company->name = $request->name;
        $company->email = $request->email;
        $company->website = $request->website;
        $company->logo = $fileName;

        $company->save();

        return redirect('/companies');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $company = Company::findOrFail($id);
        $company->delete();

        return redirect('/companies');
    }
}
