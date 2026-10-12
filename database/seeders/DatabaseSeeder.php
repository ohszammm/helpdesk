<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::firstOrCreate(
            ['email' => 'demo@example.com'],
            ['name' => 'Demo User', 'password' => 'password123']
        );

        $tickets = [
            ['Laptop will not boot', 'Laptop shows a black screen after the logo appears.', 'High', 'Open', 'Hardware'],
            ['Wi-Fi keeps disconnecting', 'Connection drops every ten minutes in the office.', 'Medium', 'In Progress', 'Network'],
            ['Cannot log in to email', 'Password is rejected even after a reset attempt.', 'Urgent', 'Open', 'Account'],
            ['Install Adobe Reader', 'Need Adobe Reader installed on the front desk PC.', 'Low', 'Resolved', 'Software'],
            ['Printer jams on every job', 'Second floor printer jams when printing double sided.', 'Medium', 'Open', 'Hardware'],
            ['VPN not connecting', 'VPN client fails with a timeout error from home.', 'High', 'In Progress', 'Network'],
            ['Request new user account', 'Create an account for the new accountant starting Monday.', 'Low', 'Closed', 'Account'],
            ['Excel crashes on open', 'Excel closes immediately when opening the budget file.', 'High', 'Open', 'Software'],
            ['Monitor flickering', 'External monitor flickers when brightness is lowered.', 'Low', 'Resolved', 'Hardware'],
            ['Shared drive access denied', 'Cannot open the finance folder on the shared drive.', 'Urgent', 'In Progress', 'Network'],
            ['Update antivirus software', 'Antivirus definitions are out of date on three PCs.', 'Medium', 'Closed', 'Software'],
            ['Replace broken keyboard', 'Several keys stopped working on the reception keyboard.', 'Low', 'Open', 'Other'],
        ];

        foreach ($tickets as [$title, $description, $priority, $status, $category]) {
            $user->tickets()->firstOrCreate(
                ['title' => $title],
                compact('description', 'priority', 'status', 'category')
            );
        }
    }
}