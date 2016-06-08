@extends('layouts.student')
<?php $x = 0;?>
@section('content')
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
<link rel="stylesheet" type="text/css" href="../../../new/flow1.css">
<div class="gray-bg">
          <section id="blog" class="section container blog-columns blog-preview">
            <div class="row">
              
              <header class="sec-heading">
                <h2>Study Materials</h2>
                <span class="subheading">Click on Download to downlod the file</span>
              </header>
@if (count($studyMaterials) > 0)



                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            
                            <thead class="thin-border-bottom">
				                <th width="100" >#</th>
				                <th width="280" >Subject</th>
                                <th width="280" >Name</th>
				                <th width="280" >File</th>
				                <th width="200" >Action</th>
				                


				            </thead>
                            <tbody>
                                @foreach ($studyMaterials as $task)
                                    <tr>
                                    	<td class="table-text"><div> <?php echo $x = $x+1; ?></div></td>
                                        <td class="table-text"><div>
                                        <?php $va = \DB::table('subject')->where('subject_id', $task->subject_id)->first();
                                        echo $va->subject_name; ?>
                                        </div></td>
                                        <td class="table-text"><div>{{ $task-> name}}</div></td>
                                        <td class="table-text"><div>{{ $task-> file}}</div></td>
                                        <td class="table-text"><div>
                                        <form method="get" action="{{url('../')}}/{{$task->file}}">

                                        		<button type="submit" id="delete-task-{{ $task->id }}" class="btn btn-info">
                                                    <i class="fa fa-btn fa-download"></i>Download
                                                </button>
                                                </div></form></td>
                                        <!-- Task Delete Button -->
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <center>{!! $studyMaterials->links() !!}</center>
                    </div>

            @endif

</div>

</div>

</section>

</div>

@endsection