<?php

namespace NtSchool\Action;

//use NtSchool\Action;
use Illuminate\Validation\ValidationException;
use NtSchool\Model\User;
use Psr\Http\Message\ServerRequestInterface;

final class RegisterAction {
	/** @var \Illuminate\Validation\Factory */
	protected $validator;
	/** @var \Illuminate\View\Factory */
	protected $renderer;


	public function __construct( $renderer, $validator ) {
		$this->renderer  = $renderer;
		$this->validator = $validator;
	}

	public function __invoke( ServerRequestInterface $request ) {
		$validationErrors = null;
		$data = $request->getParsedBody();
		if ( $request->getMethod() === 'POST' ) {


			try {
				$this->validator->validate(
					$data,
					[
						'first_name'            => [ 'required' ],
						'company'               => [ 'required' ],
						'last_name'             => [ 'required' ],
						'email'                 => [ 'required', 'email', 'unique:users,email' ],
						'address'               => [ 'required' ],
						'city'                  => [ 'required' ],
						'postcode'              => [ 'required' ],
						'phone'                 => [ 'required' ],
						'password'              => [ 'required', 'min:8', 'confirmed' ],
						'state'                 => [ 'required' ],
						'country'               => [ 'required' ],
						'fax'                   => [ 'required' ],
						'password_confirmation' => [ 'required', 'min:8' ],
					]
				);


				$user = new User();
				$user->email = $data['email'];
				$user->password = password_hash($data['password'], PASSWORD_DEFAULT );
				$user->save();


			} catch ( ValidationException $e ) {
				$validationErrors = $e->validator->errors();
			}
		}


		return $this->renderer->make( 'shop-register', array_merge([
			'title'            => 'Блог',
			'validationErrors' => $validationErrors
		], $data) );
	}
}