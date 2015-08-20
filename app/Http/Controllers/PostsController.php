<?php namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\PreparePostRequest;
use App\Http\Requests\StorePostRequest;
class PostsController extends Controller {

	public function index()
	{
        $posts = Post::where('published_at', '<=', Carbon::now())
                ->orderBy('published_at', 'desc')
                ->paginate(config('blog.posts_per_page'));

		return view('posts.index', compact('posts'));
	}

    public function showPost($year,$month,$day,$slug)
    {
        $post = Post::whereSlug($slug)->firstOrFail();

        return view('posts.show')->withPost($post);
    }

    /**
     * Show a page to create a new post
     *
     * @return \Response
     */
    public function create()
    {
        $this->middleware('auth');

        $title = '';
        $content = '';

        return view('posts.create', compact('title','content'));
    }

    /**
     * Store a new blog post
     * @param Request $request
     * @Return  \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(StorePostRequest $request)
    {
        $this->middleware('auth');

        $post = $request->all();
        $post['user_id'] = Auth::user()->id;
        $this->user->posts()->create($post);

        Flash::success('Saved!');

        return redirect('blog');
    }

    public function update($postId, Request $request)
    {
        $this->middleware('auth');
        $isRemoved = $request->has('content_removed');

        Post::FindOrFail($postId)
            ->update(['content_removed' => $isRemoved]);

        return response()->json();
    }
}
