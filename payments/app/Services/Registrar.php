<?php namespace App\Services;

use App\User;
use App\Account;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'name' => 'required|max:255',
            'surname' => 'required',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		$ret = User::create([
				'name' => $data['name'],
	            'surname' => $data['surname'],
				'email' => $data['email'],
				'password' => bcrypt($data['password']),
	            'accountId' => crypt($data['email'],'pmw'),
			]);

		Account::create([
				'accountId' => $ret->accountId,
				'balance' => 0
			]);
		return $ret;
	}

}
