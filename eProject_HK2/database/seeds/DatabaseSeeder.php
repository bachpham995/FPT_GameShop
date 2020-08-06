<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(userSeeder::class);
        $this->call(categorySeeder::class);
        $this->call(producerSeeder::class);
        $this->call(publisherSeeder::class);
        $this->call(osSeeder::class);
    } 
}

class userSeeder extends Seeder {
    public function run()
    {
        DB::table('user')->insert([
            ['TYPE'=>'0','FNAME'=>'Thịnh','LNAME'=>'Đỗ','EMAIL'=>'thinhdo@gmail.com','PASSWORD'=>Hash::make('Admin12345'),'ADDRESS'=>'Quận 10','PHONE'=>'0123456789'],
            ['TYPE'=>'1','FNAME'=>'Phát','LNAME'=>'Lưu Trọng','EMAIL'=>'phatltuit@gmail.com','PASSWORD'=>Hash::make('Admin12345'),'ADDRESS'=>'Hóc Môn','PHONE'=>'0123456789'],
            ['TYPE'=>'1','FNAME'=>'Bách','LNAME'=>'Phạm Xuân','EMAIL'=>'bachpham995@gmail.com','PASSWORD'=>Hash::make('Admin12345'),'ADDRESS'=>'Quận 12','PHONE'=>'0123456789'],
            ['TYPE'=>'1','FNAME'=>'Hóa','LNAME'=>'Nguyễn Vũ Hoàng','EMAIL'=>'nguyenvuhoanghoa95@gmail.com','PASSWORD'=>Hash::make('Admin12345'),'ADDRESS'=>'Quận Bình Thạnh','PHONE'=>'0123456789'],
            ['TYPE'=>'2','FNAME'=>'Someone','LNAME'=>'Nguyễn','EMAIL'=>'someone@gmail.com','PASSWORD'=>Hash::make('User12345'),'ADDRESS'=>'Somewhere','PHONE'=>'0123456789'],
        ]);
    } 
}
class categorySeeder extends Seeder {
    public function run()
    {
        DB::table('category')->insert([
            ['NAME'=>'Action'],
            ['NAME'=>'Adventure'],
            ['NAME'=>'Combat'],
            ['NAME'=>'Defense'],
            ['NAME'=>'Fighting'],
            ['NAME'=>'FPS + TPS (First – Third person shooter)'],
            ['NAME'=>'MMO (Massively Multiplayer Online)'],
            ['NAME'=>'Platformer'],
            ['NAME'=>'Rhythm'],
            ['NAME'=>'Roguelike'],
            ['NAME'=>'RTS (Real Time Strategy)'],
            ['NAME'=>'Simulation'],
            ['NAME'=>'Sports'],
            ['NAME'=>'Stealth'],
            ['NAME'=>'Strategy'],
            ['NAME'=>'Horror'],
            ['NAME'=>'Survival'],
            ['NAME'=>'Shooting'],
            ['NAME'=>'Point & Click'],
            ['NAME'=>'Puzzle'],
            ['NAME'=>'RPG (Role-Playing Game)'],
        ]);
    }
}
class producerSeeder extends Seeder {
    public function run()
    {
        DB::table('producer')->insert([
            ['NAME'=>'Nintendo'],['NAME'=>'Valve Corporation'],['NAME'=>'Rockstar Games'],['NAME'=>'Electronic Arts'],['NAME'=>'Activision Blizzard'],['NAME'=>'Ubisoft'],['NAME'=>'Sega Games Co. Ltd'],
            ['NAME'=>'Naughty Dog Inc'],['NAME'=>'Square Enix Holdings Co. Ltd'],['NAME'=>'Capcom Company Ltd'],['NAME'=>'Bungie Inc'],['NAME'=>'Bandai Namco Entertainment'],['NAME'=>'Mojang'],['NAME'=>'Epic Games'],
            ['NAME'=>'Game Freak'],['NAME'=>'Insomniac Games Inc'],['NAME'=>'Infinity Ward'],['NAME'=>'Take-Two Interactive Software Inc'],['NAME'=>'Gameloft'],['NAME'=>'ZeniMax Media Inc'],['NAME'=>'NCSOFT'],
            ['NAME'=>'Blizzard Entertainment Inc'],['NAME'=>'Zynga'],['NAME'=>'Nexon Co. Ltd'],['NAME'=>'Konami Holdings Corporations'],['NAME'=>'Bethesda Game Studios'],['NAME'=>'Double Fine Productions Inc.'],['NAME'=>'id Software'],
            ['NAME'=>'Rare'],['NAME'=>'Retro Studios'],['NAME'=>'Sonic Team'],['NAME'=>'LucasArts'],['NAME'=>'Level-5 Company'],['NAME'=>'Atari'],['NAME'=>'Thatgamecompany LLC'],
            ['NAME'=>'Beenox'],['NAME'=>'1C Company'],['NAME'=>'Polyphony Digital'],['NAME'=>'Intelligent Systems Co. Ltd'],['NAME'=>'SCE Santa Monica Studio'],['NAME'=>'PopCap Games'],['NAME'=>'Petroglyph Games'],
            ['NAME'=>'Relic'],['NAME'=>'Treasure Co. Ltd'],
        ]);
    }
}

class publisherSeeder extends Seeder {
    public function run()
    {
        DB::table('publisher')->insert([
            ['NAME'=>'Capcom'],['NAME'=>'Nintendo'],['NAME'=>'Sony'],['NAME'=>'Microsoft'],['NAME'=>'Electronic Arts'],
            ['NAME'=>'Sega'],['NAME'=>'Activision Blizzard'],['NAME'=>'Tencent Games'],['NAME'=>'Bandai Namco'],['NAME'=>'Square Enix'],
            ['NAME'=>'Ubisoft'],['NAME'=>'Paradox Interactive'],['NAME'=>'Bethesda Softworks'],['NAME'=>'Warner Bros. Interactive'],
            ['NAME'=>'Take-Two Interactive'],['NAME'=>'Focus Home Interactive'],['NAME'=>'NIS America'],['NAME'=>'Koei Tecmo'],['NAME'=>'Devolver Digital'],['NAME'=>'Plug-In Digital']
        ]);
    }
}
class osSeeder extends Seeder {
    public function run()
    {
        DB::table('os')->insert([
            ['NAME'=>'PC (Windows)'],['NAME'=>'MacOS'],['NAME'=>'Nintendo Switch'],['NAME'=>'PlayStation 3(PS3)'],['NAME'=>'PlayStation 4(PS4)'],
            ['NAME'=>'PlayStation 5'],['NAME'=>'Wii'],['NAME'=>'Wii-U'],['NAME'=>'XBox 360'],['NAME'=>'XBox One'],
            ['NAME'=>'XBox series X'],['NAME'=>'Nintendo 2DS'],['NAME'=>'Nintendo 3DS'],['NAME'=>'PlayStation Vista'],['NAME'=>'PlayStation Portable'],
        ]);
    }
}
class gameSeeder extends Seeder {
    public function run()
    {
        
    }
}
class commentSeeder extends Seeder {
    public function run()
    {
        DB::table('comment')->insert([
            ['GAME_ID'=>'1', 'USER_ID' => '1', 'DESCRIPTION'=>'Game chơi tạm được', 'RATING'=>'3'],
            ['GAME_ID'=>'1', 'USER_ID' => '2', 'DESCRIPTION'=>'Gameplay hay, đồ họa đẹp', 'RATING'=>'5'],
            ['GAME_ID'=>'1', 'USER_ID' => '3', 'DESCRIPTION'=>'Game xàm vãi', 'RATING' => '1']
        ]);
    }
}