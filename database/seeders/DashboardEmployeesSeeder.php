<?php

namespace Database\Seeders;

use App\Enums\ProfileStatus;
use App\Enums\UserType;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DashboardEmployeesSeeder extends Seeder
{
    public function run(): void
    {
        $employees = [
            ['email' => 'profile.reviewer@example.com', 'name' => 'موظف مراجعة الملفات', 'role' => 'profile_document_reviewer', 'phone' => '0988000001'],
            ['email' => 'fines.employee@example.com', 'name' => 'موظف الغرامات', 'role' => 'fines_employee', 'phone' => '0988000002'],
            ['email' => 'audit.employee@example.com', 'name' => 'موظف التدقيق', 'role' => 'audit_employee', 'phone' => '0988000003'],
            ['email' => 'reports.employee@example.com', 'name' => 'موظف التقارير', 'role' => 'reports_employee', 'phone' => '0988000004'],
            ['email' => 'settings.employee@example.com', 'name' => 'موظف الإعدادات', 'role' => 'settings_employee', 'phone' => '0988000005'],
            ['email' => 'application.manager@example.com', 'name' => 'موظف إدارة الطلبات', 'role' => 'application_manager', 'phone' => '0988000006'],
            ['email' => 'test.employee@example.com', 'name' => 'موظف الاختبارات', 'role' => 'test_employee', 'phone' => '0988000007'],
            ['email' => 'license.employee@example.com', 'name' => 'موظف الرخص', 'role' => 'license_employee', 'phone' => '0988000008'],
            ['email' => 'payment.employee@example.com', 'name' => 'موظف المدفوعات', 'role' => 'payment_employee', 'phone' => '0988000009'],
        ];

        foreach ($employees as $row) {
            $role = Role::query()->where('name', $row['role'])->firstOrFail();

            User::updateOrCreate(
                ['email' => $row['email']],
                [
                    'name' => $row['name'],
                    'phone' => $row['phone'],
                    'password' => Hash::make('password123'),
                    'role_id' => $role->id,
                    'user_type' => UserType::Employee,
                    'profile_completed' => true,
                    'profile_status' => ProfileStatus::Approved,
                    'is_active' => true,
                    'email_verified_at' => now(),
                    'phone_verified_at' => now(),
                ]
            );
        }
    }
}
