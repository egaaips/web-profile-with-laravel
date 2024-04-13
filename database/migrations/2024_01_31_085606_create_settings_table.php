<?php

use App\Models\setting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        setting::create([
            'key'=>'_site_name',
            'label'=>'Judul Situs',
            'value'=>'Dinas Perikanan Kabupaten Bekasi',
            'type'=>'text',
        ]);

        setting::create([
            'key'=>'_location',
            'label'=>'Alamat Kantor',
            'value'=>'Komplek Perkantoran Pemerintahan
            Kabupaten Bekasi Gedung A IV Lt. 2
            Cikarang, Jawa Barat, Indonesia',
            'type'=>'text',
        ]);

        setting::create([
            'key'=>'_twitter',
            'label'=>'Twitter',
            'value'=>'https://twitter.com/diskankabbekasi',
            'type'=>'text',
        ]);
        
        setting::create([
            'key'=>'_facebook',
            'label'=>'Facebook',
            'value'=>'https://facebook.com/diskankabbekasi',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_instagram',
            'label'=>'Instagram',
            'value'=>'https://instagram.com/diskankabbekasi',
            'type'=>'text',
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
