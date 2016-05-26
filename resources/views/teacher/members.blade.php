@extends('layouts.teacher')
@section('content')
{{$members}}
<?php $x = 0;?>
<script type="text/javascript" src="../../../bootstrap-colorpicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../../bootstrap-colorpicker.min.css">
<link rel="stylesheet" type="text/css" href="../../../app.css">

<link rel="stylesheet" type="text/css" href="../../../css/app.min.css">
<link rel="stylesheet" type="text/css" href="../../../css/temp.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//www.google-analytics.com/ga.js"></script>
<style type="text/css"></style> <!--[if lt IE 9]> <script type="text/javascript" src="/min-js?f=js/lib/html5shiv.min.js,js/lib/respond.min.js"></script> <![endif]-->
<style type="text/css">.header-color{background: #ff3b31;}</style>
<script type="text/javascript" src="../../../new/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="../../../new/smoothscroll.js"></script>
<script type="text/javascript" src="../../../new/marker.js"></script>

<link rel="stylesheet" type="text/css" href="../../../new/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="../../../new/animate.css">
<link rel="stylesheet" type="text/css" href="../../../new/responsive.css">
<link rel="stylesheet" type="text/css" href="../../../new/slick.css">
<link rel="stylesheet" type="text/css" href="../../../new/style.css">
<link rel="stylesheet" type="text/css" href="../../../new/linea-font.css">
<link rel="stylesheet" type="text/css" href="../../../new/flow.css">
<div class="gray-bg">
<div class="container">
    <div class="row">

        <a href="subscribe/create" class="btn btn-sm btn-success "> <span class="fa fa-plus"></span> Create </a><br><br>

        <table class="table">
            {{--Table Header--}}
            <thead class="thin-border-bottom">
                <th width="50" >#</th>
                <th width="200" >Email</th>
                <th width="100" >Subscribe On </th>
                <th width="100" >Delete </th>
            </thead>

            {{--Table Body--}}
            <tbody>


                <tr>
                    @foreach( $members as $member)

                    <?php $x = $x+1; ?>

                    <td>{{ $x }}</td>
                    <td>{{ $member->member_username}}</td>
                    <td>{{ $member->membership_status}}</td>



                    <td><a data-toggle="modal" data-target="#delete_subscriber" type="button" class="btn btn-danger btn-xs">Delete</a></td>

                </tr>

                @endforeach

            </tbody>
        </table>

    </div>
</div>

</div>


@endsection