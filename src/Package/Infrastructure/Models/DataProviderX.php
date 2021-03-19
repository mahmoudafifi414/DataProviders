<?php


namespace Package\Infrastructure\Models;

class DataProviderX extends BaseModel
{
    public static string $source = "DataProviderX";
    public array $fillables = [
        "amount" => "parentAmount",
        "currency" => "Currency",
        "email" => "parentEmail",
        "statusCode" => "statusCode",
        "date" => "registrationDate",
        "id" => "parentIdentification"
    ];
    public array $statusCodeMappings = ['authorised' => '1', 'decline' => '2', 'refunded' => '3'];
}
