<?php namespace App\Repositories;

interface PaymentRepositoryInterface
{
    public function assemblePaymentForm();
    public function store();
}