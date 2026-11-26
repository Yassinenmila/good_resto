<?php

namespace App\Model;

class Booking {

    public function __construct(private int $id, private int $user_id, private int $table_id, private string $booking_date, private string $booking_time, private string $status) {}

    public function getId(): int {
        return $this->id;
    }
    public function getUserId(): int {
        return $this->user_id;
    }
    public function getTableId(): int {
        return $this->table_id;
    }
    public function getBookingDate(): string {
        return $this->booking_date;
    }
    public function getBookingTime(): string {
        return $this->booking_time;
    }
    public function getStatus(): string {
        return $this->status;
    }
}