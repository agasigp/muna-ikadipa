<?php
use App\Models\Participant;
use App\Models\Donation;

if (! function_exists('registration_no')) {
    function registration_no()
    {
        $countRegistration = Participant::whereYear('created_at', date('Y'))->count();

        if ($countRegistration == 0) {
            return 'REG-MUNA2018-001';
        } elseif ($countRegistration < 9) {
            return 'REG-MUNA2018-00' . $countRegistration++;
        } elseif ($countRegistration < 99) {
            return 'REG-MUNA2018-0' . $countRegistration++;
        } else {
            return 'REG-MUNA2018-' . $countRegistration++;
        }
    }
}

if (!function_exists('donation_no')) {
    function donation_no()
    {
        $countRegistration = Donation::whereYear('created_at', date('Y'))->count();

        if ($countRegistration == 0) {
            return 'DON-MUNA2018-001';
        } elseif ($countRegistration < 9) {
            return 'DON-MUNA2018-00' . $countRegistration++;
        } elseif ($countRegistration < 99) {
            return 'DON-MUNA2018-0' . $countRegistration++;
        } else {
            return 'DON-MUNA2018-' . $countRegistration++;
        }
    }
}
