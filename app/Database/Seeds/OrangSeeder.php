<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;

class OrangSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'nama' 				=> 'Jacky',
				'alamat'    	=> 'Jl. Merci Raya No. 123',
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now()
			],
			[
				'nama' 				=> 'Andre',
				'alamat'    	=> 'Jl. Merci Raya No. 456',
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now()
			],
			[
				'nama' 				=> 'Budiyanto',
				'alamat'    	=> 'Jl. Merci Raya No. 789',
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now()
			],
		];

		// Simple Queries
		// $this->db->query("INSERT INTO orang (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)", $data);

		// Using Query Builder
		// $this->db->table('orang')->insert($data);
		$this->db->table('orang')->insertBatch($data);
	}
}
