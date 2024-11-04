<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin Permission
        Permission::create(['name' => 'tambah-guru']);
        Permission::create(['name' => 'edit-guru']);
        Permission::create(['name' => 'delete-guru']);
        Permission::create(['name' => 'lihat-guru']);

        Permission::create(['name' => 'tambah-siswa']);
        Permission::create(['name' => 'edit-siswa']);
        Permission::create(['name' => 'delete-siswa']);
        Permission::create(['name' => 'lihat-siswa']);
        
        Permission::create(['name' => 'tambah-kelas']);
        Permission::create(['name' => 'edit-kelas']);
        Permission::create(['name' => 'delete-kelas']);
        Permission::create(['name' => 'lihat-kelas']);
        
        Permission::create(['name' => 'tambah-mapel']);
        Permission::create(['name' => 'edit-mapel']);
        Permission::create(['name' => 'delete-mapel']);
        Permission::create(['name' => 'lihat-mapel']);

        // Create Role Admin
        Role::create(['name' => 'admin']);
        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo('tambah-guru');
        $roleAdmin->givePermissionTo('edit-guru');
        $roleAdmin->givePermissionTo('delete-guru');
        $roleAdmin->givePermissionTo('lihat-guru');

        $roleAdmin->givePermissionTo('tambah-siswa');
        $roleAdmin->givePermissionTo('edit-siswa');
        $roleAdmin->givePermissionTo('delete-siswa');
        $roleAdmin->givePermissionTo('lihat-siswa');
        
        $roleAdmin->givePermissionTo('tambah-kelas');
        $roleAdmin->givePermissionTo('edit-kelas');
        $roleAdmin->givePermissionTo('delete-kelas');
        $roleAdmin->givePermissionTo('lihat-kelas');
        
        $roleAdmin->givePermissionTo('tambah-mapel');
        $roleAdmin->givePermissionTo('edit-mapel');
        $roleAdmin->givePermissionTo('delete-mapel');
        $roleAdmin->givePermissionTo('lihat-mapel');

        // Create Role Guru
        Role::create(['name' => 'guru']);
        $roleGuru = Role::findByName('guru');
        
        $roleGuru->givePermissionTo('edit-guru');
        $roleGuru->givePermissionTo('lihat-guru');
        
        $roleGuru->givePermissionTo('edit-siswa');
        $roleGuru->givePermissionTo('lihat-siswa');

        $roleGuru->givePermissionTo('tambah-mapel');
        $roleGuru->givePermissionTo('edit-mapel');
        $roleGuru->givePermissionTo('delete-mapel');
        $roleGuru->givePermissionTo('lihat-mapel');

        // Create Role Siswa
        Role::create(['name' => 'siswa']);
        $roleSiswa = Role::findByName('siswa');

        $roleSiswa->givePermissionTo('lihat-mapel');

    }
}
