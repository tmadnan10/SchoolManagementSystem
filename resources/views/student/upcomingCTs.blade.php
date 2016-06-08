@extends('layouts.student')
@section('content')
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
          <section id="blog" class="section container blog-columns blog-preview">
            <div class="row">
              
              <header class="sec-heading">
                <h2>Class Tests</h2>
                <span class="subheading">Currently you have {{count($CTs)}} Upcoming Class Test(s)</span>
              </header>
@if (count($CTs) > 0)



                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            
                            <thead class="thin-border-bottom">
				                <th width="150" >#</th>
				                <th width="280" >Subject Name</th>
				                <th width="280" >Date</th>
				                <th width="400" >Syllabus</th>
				                


				            </thead>
                            <tbody>
                                @foreach ($CTs as $task)
                                    <tr>
                                    	<td class="table-text"><div> <?php echo $x = $x+1; ?></div></td>
                                        <td class="table-text"><div>{{ $task->subject_name }}</div></td>
                                        <td class="table-text"><div><?php $timestamp = strtotime( $task->date );
   
   print date( 'd M Y', $timestamp );?></div></td>
                                        <td class="table-text"><div>{{ $task->syllabus }}</div></td>
                                        <!-- Task Delete Button -->
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

            @endif
</div>
</div>
</section>
</div>

<br>
 
<footer class="footer row" role="contentinfo">
      <div class="bs-docs-social">
        <ul class="bs-docs-social-buttons">
          <li class="follow-btn">
            <a itemprop="sameAs" rel="nofollow" href="https://www.facebook.com/ils" class="btn btn-primary btn-xs">
             <i class="fa fa-facebook"></i> Like ILS </a></li>
          <li class="tweet-btn">
            <a itemprop="sameAs" rel="nofollow" href="https://twitter.com/ils" class="btn btn-info btn-xs">
              <i class="fa fa-twitter"></i> Follow @ILS </a></li>
          </ul>
        </div>

        <ul class="footer-links text-muted">
          <li><span class="glyphicon glyphicon-globe"></span> School Management System © 2016</li><li>.</li><li>Created by&nbsp;&nbsp;&nbsp;<a href="#" class="label label-info">ILS</a></li>
          <li>.</li>
          <li> <span class="glyphicon glyphicon-list-alt"></span> <a href="#"> Site Privacy policy </a></li>
          <li>.</li><li> <span class="fa fa-facebook"></span> <a class="isTooltip" title="" href="https://www.facebook.com/ils/" data-original-title="send us a message using facebook">Contact us</a></li>
          <li>.</li><li> <i class="fa fa-google-plug"></i> <a itemprop="sameAs" rel="nofollow" href="https://plus.google.com/+ils/posts">Google +</a></li>
        </ul>
      </footer>




@endsection