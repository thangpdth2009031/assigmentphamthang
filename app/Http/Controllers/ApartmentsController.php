<?php

namespace App\Http\Controllers;

use App\Models\Apartments;
use App\Http\Requests\ApartmentsValadator;
use Illuminate\Http\Request;


class ApartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Apartments::paginate(1);
        return view('list', ['list' => Apartments::paginate(1)]);
    }

    /**
     * Show the event for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formApartments');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApartmentsValadator $request)
    {
        $event = new Apartments();
        $request->validated();
        $event->tenChungCu = $request->get('tenChungCu');
        $event->diaChi = $request->get('diaChi');
        $event->giaBan = $request->get('giaBan');
        $event->thongTinChung = $request->get('thongTinChung');
        $event->thongTinChiTiet = $request->get('thongTinChiTiet');
        $event->hinhDaiDien = $request->get('hinhDaiDien');
        $event->trangThai = $request->get('trangThai');
        $event->save();
        return redirect('apartments/index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */


    public function save(ApartmentsValadator $request, $id)
    {
        //
    }

    /**
     * Show the event for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    }
