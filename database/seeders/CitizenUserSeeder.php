<?php

namespace Database\Seeders;

use App\Enums\ProfileStatus;
use App\Enums\UserType;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CitizenUserSeeder extends Seeder
{
    public function run(): void
    {
        $role = Role::where('name', 'citizen')->firstOrFail();

        foreach ($this->citizens() as $citizen) {
            $this->seedCitizen($role, $citizen);
        }
    }

    /**
     * @return list<array{
     *   email: string,
     *   phone: string,
     *   name: string,
     *   national_id: string,
     *   password: string,
     *   birth_date: string,
     *   governorate: string,
     *   address: string,
     *   language?: string
     * }>
     */
    private function citizens(): array
    {
        return [
            [
                'email' => 'citizen@example.com',
                'phone' => '0977777777',
                'name' => 'مواطن تجريبي 01',
                'national_id' => '01010012345',
                'password' => 'password',
                'birth_date' => '1995-03-12',
                'governorate' => 'دمشق',
                'address' => 'دمشق — المزة — شارع بغداد — بناء 14 — طابق 3',
            ],
            [
                'email' => 'citizen.02@example.com',
                'phone' => '0944000002',
                'name' => 'مواطن تجريبي 02',
                'national_id' => '01010000002',
                'password' => 'password123',
                'birth_date' => '1994-02-02',
                'governorate' => 'ريف دمشق',
                'address' => 'عنوان تجريبي 02',
            ],
            [
                'email' => 'citizen.03@example.com',
                'phone' => '0944000003',
                'name' => 'مواطن تجريبي 03',
                'national_id' => '01010000003',
                'password' => 'password',
                'birth_date' => '1993-03-03',
                'governorate' => 'حلب',
                'address' => 'عنوان تجريبي 03',
            ],
            [
                'email' => 'citizen.04@example.com',
                'phone' => '0944000004',
                'name' => 'مواطن تجريبي 04',
                'national_id' => '01010000004',
                'password' => 'password112233',
                'birth_date' => '1992-04-04',
                'governorate' => 'حمص',
                'address' => 'عنوان تجريبي 04',
            ],
            [
                'email' => 'citizen.05@example.com',
                'phone' => '0944000005',
                'name' => 'مواطن تجريبي 05',
                'national_id' => '01010000005',
                'password' => 'password1122',
                'birth_date' => '1991-05-05',
                'governorate' => 'حماة',
                'address' => 'عنوان تجريبي 05',
            ],
            [
                'email' => 'omar.khaled@example.com',
                'phone' => '0944111001',
                'name' => 'مواطن تجريبي 06',
                'national_id' => '05050067890',
                'password' => 'password',
                'birth_date' => '1988-06-14',
                'governorate' => 'اللاذقية',
                'address' => 'اللاذقية — الصليبة — شارع 8 آذار — بناء 22',
            ],
            [
                'email' => 'layla.hassan@example.com',
                'phone' => '0944111002',
                'name' => 'مواطن تجريبي 07',
                'national_id' => '06060078901',
                'password' => 'password',
                'birth_date' => '1996-12-08',
                'governorate' => 'طرطوس',
                'address' => 'طرطوس — الكورنيش الغربي — قرب الميناء',
            ],
            [
                'email' => 'sami.ali@example.com',
                'phone' => '0944111003',
                'name' => 'مواطن تجريبي 08',
                'national_id' => '07070089012',
                'password' => 'password',
                'birth_date' => '1985-04-25',
                'governorate' => 'إدلب',
                'address' => 'إدلب — حي الشهداء — شارع الجامعة',
            ],
            [
                'email' => 'rana.mahmoud@example.com',
                'phone' => '0944111004',
                'name' => 'مواطن تجريبي 09',
                'national_id' => '08080090123',
                'password' => 'password',
                'birth_date' => '2001-02-17',
                'governorate' => 'دير الزور',
                'address' => 'دير الزور — حي الجورة — شارع الحرية',
            ],
            [
                'email' => 'youssef.adnan@example.com',
                'phone' => '0944111005',
                'name' => 'مواطن تجريبي 10',
                'national_id' => '09090101234',
                'password' => 'password',
                'birth_date' => '1990-08-03',
                'governorate' => 'الرقة',
                'address' => 'الرقة — حي التيار — قرب دوار الفرات',
            ],
            [
                'email' => 'hind.waleed@example.com',
                'phone' => '0944111006',
                'name' => 'مواطن تجريبي 11',
                'national_id' => '10101112345',
                'password' => 'password',
                'birth_date' => '1993-10-19',
                'governorate' => 'الحسكة',
                'address' => 'الحسكة — حي الناشرية — شارع الزراعة',
            ],
            [
                'email' => 'tarek.suleiman@example.com',
                'phone' => '0944111007',
                'name' => 'مواطن تجريبي 12',
                'national_id' => '11111123456',
                'password' => 'password',
                'birth_date' => '1987-05-27',
                'governorate' => 'السويداء',
                'address' => 'السويداء — شهبا — شارع الثورة',
            ],
            [
                'email' => 'maya.ghassan@example.com',
                'phone' => '0944111008',
                'name' => 'مواطن تجريبي 13',
                'national_id' => '12121234567',
                'password' => 'password',
                'birth_date' => '2000-07-11',
                'governorate' => 'درعا',
                'address' => 'درعا — المحطة — شارع السوق',
            ],
            [
                'email' => 'bilal.nasser@example.com',
                'phone' => '0944111009',
                'name' => 'مواطن تجريبي 14',
                'national_id' => '13131345678',
                'password' => 'password',
                'birth_date' => '1994-03-06',
                'governorate' => 'القنيطرة',
                'address' => 'القنيطرة — خان أرنبة — شارع المدارس',
            ],
            [
                'email' => 'dina.fares@example.com',
                'phone' => '0944111010',
                'name' => 'مواطن تجريبي 15',
                'national_id' => '14141456789',
                'password' => 'password',
                'birth_date' => '1997-01-29',
                'governorate' => 'دمشق',
                'address' => 'دمشق — كفر سوسة — شارع مياد — بناء 5',
            ],
            [
                'email' => 'hassan.riadh@example.com',
                'phone' => '0944111011',
                'name' => 'مواطن تجريبي 16',
                'national_id' => '15151567890',
                'password' => 'password',
                'birth_date' => '1983-11-16',
                'governorate' => 'حلب',
                'address' => 'حلب — حي السفينة — شارع الملكة زنوبيا',
            ],
            [
                'email' => 'salma.karim@example.com',
                'phone' => '0944111012',
                'name' => 'مواطن تجريبي 17',
                'national_id' => '16161678901',
                'password' => 'password',
                'birth_date' => '2002-04-02',
                'governorate' => 'حمص',
                'address' => 'حمص — باب عمر — شارع الحمراء',
            ],
            [
                'email' => 'wael.jamal@example.com',
                'phone' => '0944111013',
                'name' => 'مواطن تجريبي 18',
                'national_id' => '17171789012',
                'password' => 'password',
                'birth_date' => '1989-09-21',
                'governorate' => 'اللاذقية',
                'address' => 'اللاذقية — الرمل الجنوبي — شارع 16 تشرين',
            ],
            [
                'email' => 'nada.imad@example.com',
                'phone' => '0944111014',
                'name' => 'مواطن تجريبي 19',
                'national_id' => '18181890123',
                'password' => 'password',
                'birth_date' => '1991-12-13',
                'governorate' => 'طرطوس',
                'address' => 'طرطوس — الميناء — شارع الجلاء',
            ],
            [
                'email' => 'ziad.mounir@example.com',
                'phone' => '0944111015',
                'name' => 'مواطن تجريبي 20',
                'national_id' => '19191901234',
                'password' => 'password',
                'birth_date' => '1986-02-28',
                'governorate' => 'ريف دمشق',
                'address' => 'ريف دمشق — جرمانا — شارع الثورة — مقابل البلدية',
            ],
        ];
    }

    /**
     * @param  array{
     *   email: string,
     *   phone: string,
     *   name: string,
     *   national_id: string,
     *   password: string,
     *   birth_date: string,
     *   governorate: string,
     *   address: string,
     *   language?: string
     * }  $citizen
     */
    private function seedCitizen(Role $role, array $citizen): void
    {
        User::updateOrCreate(
            ['email' => $citizen['email']],
            [
                'name' => $citizen['name'],
                'phone' => $citizen['phone'],
                'national_id' => $citizen['national_id'],
                'password' => Hash::make($citizen['password']),
                'role_id' => $role->id,
                'user_type' => UserType::Citizen,
                'birth_date' => $citizen['birth_date'],
                'governorate' => $citizen['governorate'],
                'address' => $citizen['address'],
                'language' => $citizen['language'] ?? 'ar',
                'profile_completed' => true,
                'profile_status' => ProfileStatus::Approved,
                'profile_submitted_at' => now()->subDays(15),
                'profile_reviewed_at' => now()->subDays(14),
                'is_active' => true,
                'email_verified_at' => now()->subDays(15),
                'phone_verified_at' => now()->subDays(15),
            ]
        );
    }
}
