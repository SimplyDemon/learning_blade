<?php

namespace NtSchool\Action;

use Psr\Http\Message\RequestInterface;

final class HomeAction {
	/** @var \Illuminate\View\Factory */
	protected $renderer;
	protected $logger;

	public function __construct( $renderer, $logger ) {
		$this->renderer = $renderer;
		$this->logger = $logger;
	}

	public function __invoke( RequestInterface $request ) {
		$this->logger->warning('Foo11');
		return $this->renderer->make( 'index', [
			'title' => 'Главная страница'
		] );
	}
}