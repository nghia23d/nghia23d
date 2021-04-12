<?php

namespace nghia23d\cms\Console\Commands;

use Illuminate\Console\Command;
use nghia23d\cms\Http\Controllers\Admin\UserController;

class CreateAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cms:createadmin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create admin for Cms';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        if ($this->confirm('Ban xac nhan tao tai khoan Admin ?')) {
            $email = $this->ask('Email: ');
            $password = $this->ask('Mat khau: ');
            if ($email && $password) {
                (new UserController)->createAdmin($email, $password);
                $this->info('Tao tai khoan thanh cong! Truy cap link websitecuaban/cms de su dung.');
                $this->line('--------------------------------------------------------------------');
                $this->info('Email: ' . $email);
                $this->info('Mat khau: ' . $password);
                $this->line('--------------------------------------------------------------------');
            } else {
                $this->info('Email va mat khong khong duoc de trong!');
            }
        }
    }
}
