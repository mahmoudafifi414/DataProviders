<?php


namespace Package\Infrastructure\Models;


class DataProviderY extends BaseModel
{
    public static string $source = "DataProviderY";
    public $fillables = [
        "amount" => "balance",
        "currency" => "currency",
        "email" => "email",
        "statusCode" => "status",
        "date" => "created_at",
        "id" => "id"
    ];
    public array $statusCodeMappings = ['authorised' => '100', 'decline' => '200', 'refunded' => '300'];
}
