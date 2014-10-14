@extends('layouts.master')

@section('title')
@parent
Project screens | Christoper A. Rubio
@stop

@section('content')
<div class="resume-content row group cards">
    <section class="col span12">
        <header class="row group card">
            <h2>Uploader project</h2>
        </header>
        <!-- Image carousel -->
        <section style="padding-top: 20px;" class="row group card">
            <div id="carousel" class="carousel" data-interval="0">
                <!-- Menu -->
                <ol class="carousel-indicators">
                    <? for ($i = 0; $i < count($screens); $i++) : ?>
                        <li data-target="#carousel" data-slide-to="<?=$i?>" class="<? if ($i==0) : ?>active<? endif ?>"></li>
                    <? endfor ?>
                </ol>
                
                <!-- Items -->
                <div class="carousel-inner">
                    <? foreach ($screens AS $key => $screen) : ?>
                        <div class="item <? if ($key == 0) : ?>active<? endif ?>">
                            <a href="<?=$screen['url']?>"><img src="<?=$screen['url']?>" alt="uploader project" /></a>
                        </div>
                    <? endforeach ?>
                </div> 
                <a href="#carousel" class="left carousel-control" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a href="#carousel" class="right carousel-control" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </section>
    </section>
</div>
@stop