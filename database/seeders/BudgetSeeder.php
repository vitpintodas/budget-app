<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Budget;

class BudgetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $budgets = ['Courant', 'Loisirs', 'Epargne'];

        foreach ($budgets as $name) {
        Budget::create([
            'name' => $name,
            'initial_amount' => 0,
            'current_balance' => 0,
        ]);
    }
    }
}
