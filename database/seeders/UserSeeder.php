<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'root.base',
            'email' => 'storage.catnet@gmail.com',
            'password' => bcrypt('Virgo.66'),
            'two_factor_secret' => 'eyJpdiI6ImJPMUZSK2JrR2FOWnJsS0lFUDU1QWc9PSIsInZhbHVlIjoiS1JRV3pnYmNVNVNkeXVFbVgxT0pOejA2K3NFQ1l3QmJtZ0lGMG8xYWZkdz0iLCJtYWMiOiJjMmI4Nzg0MDAxOGFlN2EwZWM0YjgzMmVmOTljNGQ2YThiMzcxNThjYjY5NzgwYzJkZDkzZmJkMmY5MDIxZGEwIn0=',
            'two_factor_recovery_codes' => 'eyJpdiI6IlhQZG85ODc5OUIyTFdsRkJvUjR3T0E9PSIsInZhbHVlIjoiTCt4ZStoUlBsekJ5L0dOTk9NTVgrNlRBUEV6cFI4cnJ2OHdhVVRuWE5zVDZtWkpRZTJhL1lLeVZZZUpQNFljeDRrR1JFNVBmQzFkMDVZUkY1MCs5OU5uaTQzVytoYU1nQ0hneUNOVE1tTkV5VzA4b1pUK3lJS3pud2Z4dUVLcVRvT3lybWhvY2tWN3IrUHZGeW9oZTJlNFdGVmw0cDhDd1ZzK0JtRE1uTEFrSUlXUldxcjRSSkRrc250N3RMNStEWjUzRkNIdkF6S3lhNkIrNlFST3R4TlkxNnA3RGh5WGYvbEtoUkVkMDlmMnhNVGxGYThPKzBrV1hHSXZZRkZ1eVNCbVhla0RtVzJITFBhQWJwa2xZcVE9PSIsIm1hYyI6Ijc0YWNkNjc0MWIzOTlhZWMwNmJkNGE1ZjgzYmQzNGM2ZmMxNmU0NDdkYzEzYjBhOGRjZDQyNzY3OTM3MzEwOTAifQ=='
        ]);
    }
}
