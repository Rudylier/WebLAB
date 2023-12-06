<?php
require_once '../vendor/autoload.php';
require_once "../classes/authors.php";
require_once "../classes/paintings.php";
require_once "../classes/type.php";

$app = new Silex\Application();
header("Access-Control-Allow-Origin: *");

$app->get('/authors/list.json', function () use ($app){
	$cur_author = new Authors;
	$list = $cur_author->read();
	return $app->json($list);
});

$app->get('/authors/count', function () use ($app){
	$cur_author = new Authors;
	$list = $cur_author->count();
	return $app->json($list);
});

$app->get('/authors/max', function () use ($app){
	$cur_author = new Authors;
	$list = $cur_author->max();
	return $app->json($list);
});

$app->get('/authors/sum', function () use ($app){
	$cur_author = new Authors;
	$list = $cur_author->sum();
	return $app->json($list);
});

$app->get('/authors/line', function () use ($app){
	$cur_paint = new Paintings;
	$list = $cur_paint->line();
	return $app->json($list);
});

$app->get('/paintings/list.json', function () use ($app){
	$cur_paint = new Paintings;
	$list = $cur_paint->read();
	return $app->json($list);
});

$app->get('/paintings/count', function () use ($app){
	$cur_paint = new Paintings;
	$list = $cur_paint->count();
	return $app->json($list);
});

$app->get('/paintings/max', function () use ($app){
	$cur_paint = new Paintings;
	$list = $cur_paint->max();
	return $app->json($list);
});

$app->get('/paintings/sum', function () use ($app){
	$cur_paint = new Paintings;
	$list = $cur_paint->sum();
	return $app->json($list);
});

$app->get('/paintings/pie', function () use ($app){
	$cur_paint = new Paintings;
	$list = $cur_paint->pie();
	return $app->json($list);
});

$app->get('/type/list.json', function () use ($app){
	$cur_type = new Type;
	$list = $cur_type->read();
	return $app->json($list);
});

$app->run();