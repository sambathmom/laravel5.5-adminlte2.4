@extends('layouts.admin')

@section('title') Time manageme @endsection

@section('content')
    <div class="content">
        <section class="content-header">
           <div class="col-sm-12 row">
                <div class="col-sm-8">
                    <h2>Personal Finace Management System</h2>      
                </div>              
            </div>
        </section>  
        
        <div class="box">
            <div class="content">
                <div class="col-md-12">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection