<?php
$u = \App\Models\User::first();
if ($u) {
    // Make sure we have a model instance
    $u->role = 'admin';
    $u->save();
    echo "First user set to admin.\n";
} else {
    $u = new \App\Models\User();
    $u->name = 'Admin';
    $u->email = 'admin@admin.com';
    $u->password = bcrypt('password');
    $u->role = 'admin';
    $u->save();
    echo "Created new admin user.\n";
}
