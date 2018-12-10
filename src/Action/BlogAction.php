<?php

namespace NtSchool\Action;

//use NtSchool\Action;
use Illuminate\Pagination\Paginator;
use NtSchool\Model\Post;
use Psr\Http\Message\ServerRequestInterface;

final class BlogAction {
	/** @var \Illuminate\View\Factory */
	protected $renderer;

	public function __construct( $renderer ) {
		$this->renderer = $renderer;
	}

	public function __invoke( ServerRequestInterface $request ) {
		$totalPosts = count(Post::all());

		$page = $request->getQueryParams()['page'] ?? 1;
		$postsPerPage = 3;
		$offset = $page == 1 ? 0 : ($page-1) * $postsPerPage ;

		$posts = new Paginator(
			Post::skip($offset)->take($postsPerPage)->get(),
			$postsPerPage,
			$page
		);



		return $this->renderer->make( 'blog-right', [
			'title' => 'Блог',
			'posts' => $posts,
			'totalPosts' => $totalPosts
		] );
	}
}