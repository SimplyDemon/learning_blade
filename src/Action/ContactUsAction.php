<?php

namespace NtSchool\Action;

use Psr\Http\Message\RequestInterface;

final class ContactUsAction {
	/** @var \Illuminate\View\Factory */
	protected $renderer;

	public function __construct( $renderer ) {
		$this->renderer = $renderer;
	}

	public function __invoke( RequestInterface $request ) {
		return $this->renderer->make( 'contact', [
			'title' => 'Контакты'
		] );
	}
}

