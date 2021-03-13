<?php
    use Tester\Assert;

    require '../vendor/autoload.php'; 
    require '../src/library.php';
    Tester\Environment::setup();

    $myRect = new Rectangle(5,5);

    Assert::equal(20,$myRect->getPerimeter());
    Assert::equal(25,$myRect->getArea());
    Assert::true($myRect->isSquare());
    Assert::equal(7.07106781187,$myRect->getDiagonal());
?>