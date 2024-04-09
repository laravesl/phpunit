<?php

namespace Laravesl\Phpunit\PhUntPo;

use mysqli;
use Exception;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Artisan;
use Spatie\Permission\Models\Permission;
use Jackiedo\DotenvEditor\Facades\DotenvEditor;

/**
 * Database configuration
 */
class PhDb
{
    public function databaseSetup($phDb)
    {
        $this->databaseConfiguration($phDb[xPhpLib('ZGF0YWJhc2U=')]);
        try {

            $this->sqliSetup($phDb[xPhpLib('ZGF0YWJhc2U=')]);
            Artisan::call('migrate:fresh');

        } catch (Exception $e) {

            throw $e;
        }
    }

    public function sqliSetup($phDb)
    {
        new mysqli($phDb[xPhpLib('REJfSE9TVA==')], $phDb[xPhpLib('REJfVVNFUk5BTUU=')],
                $phDb[xPhpLib('REJfUEFTU1dPUkQ=')], $phDb[xPhpLib('REJfREFUQUJBU0U=')],
                $phDb[xPhpLib('REJfUE9SVA==')]);
    }

    public function databaseConfiguration($phDb)
    {
        config([
            xPhpLib('ZGF0YWJhc2UuZGVmYXVsdA==') => xPhpLib('bXlzcWw='),
            xPhpLib('ZGF0YWJhc2UuY29ubmVjdGlvbnMubXlzcWwuaG9zdA==') => $phDb[xPhpLib('REJfSE9TVA==')],
            xPhpLib('ZGF0YWJhc2UuY29ubmVjdGlvbnMubXlzcWwucG9ydA==') => $phDb[xPhpLib('REJfUE9SVA==')],
            xPhpLib('ZGF0YWJhc2UuY29ubmVjdGlvbnMubXlzcWwuZGF0YWJhc2U=') => $phDb[xPhpLib('REJfREFUQUJBU0U=')],
            xPhpLib('ZGF0YWJhc2UuY29ubmVjdGlvbnMubXlzcWwudXNlcm5hbWU=') => $phDb[xPhpLib('REJfVVNFUk5BTUU=')],
            xPhpLib('ZGF0YWJhc2UuY29ubmVjdGlvbnMubXlzcWwucGFzc3dvcmQ=') => $phDb[xPhpLib('REJfUEFTU1dPUkQ=')],
        ]);

        DB::purge(xPhpLib('bXlzcWw='));
        Artisan::call(xPhpLib('Y29uZmlnOmNsZWFy'));
    }

    public function admStp($a, $phDb = null)
    {
        $role = Role::where(xPhpLib('bmFtZQ=='), xPhpLib('QWRtaW4='))->first();
        if (!$role) {
            $role = Role::create([xPhpLib('bmFtZQ==') => xPhpLib('QWRtaW4=')]);
            $role->givePermissionTo(Permission::all());
        }

        $user = User::whereHas('roles', function($q) {
            $q->where(xPhpLib('bmFtZQ=='), xPhpLib('QWRtaW4='));
        })?->first();

        if (!$user) {
            $user = User::factory()->create([
                xPhpLib('bmFtZQ==') => $a[xPhpLib('Zmlyc3RfbmFtZQ==')].' '.$a['last_name'],
                xPhpLib('ZW1haWw=') => $a[xPhpLib('ZW1haWw=')],
                xPhpLib('ZW1haWxfdmVyaWZpZWRfYXQ=') => now(),
                xPhpLib('cGFzc3dvcmQ=') => Hash::make($a[xPhpLib('cGFzc3dvcmQ=')]),
                xPhpLib(xPhpLib('c3lzdGVtX3Jlc2VydmU=')) => true,
            ]);
            $user->assignRole($role);
        }
    }

    public function env($phDb)
    {
        DotenvEditor::setKeys([
            xPhpLib('REJfSE9TVA==') => $phDb[xPhpLib('REJfSE9TVA==')],
            xPhpLib('REJfUE9SVA==') => $phDb[xPhpLib('REJfUE9SVA==')],
            xPhpLib('REJfREFUQUJBU0U=') => $phDb[xPhpLib('REJfREFUQUJBU0U=')],
            xPhpLib('REJfVVNFUk5BTUU=') => $phDb[xPhpLib('REJfVVNFUk5BTUU=') ],
            xPhpLib('REJfUEFTU1dPUkQ=') => $phDb[xPhpLib('REJfUEFTU1dPUkQ=')],
        ]);

        DotenvEditor::save();
    }
}
