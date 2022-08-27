<!doctype html>
<?php $lang = app()->getLocale(); 

?>

<!DOCTYPE html>
<html lang="{{$lang}}">

<head>
    <meta charset="utf-8">
    <title>Personal Profile</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    
       <!-- CSS FILES -->
       <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

        


    @if ($lang =='ar')
    <link href="{{asset('assets/css-rtl/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css-rtl/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css-rtl/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css-rtl/templatemo-first-portfolio-style.css')}}" rel="stylesheet">      
    
    @else
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/templatemo-first-portfolio-style.css')}}" rel="stylesheet">

    @endif
</head>
