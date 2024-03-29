<article class="post-comments" id="post-comments">
    <h3><i class="fa fa-comments"></i> {{$post->commentNumber()}}</h3>

    <div class="comment-body padding-10">
        <ul class="comments-list">
            @foreach($postComments as $comment)
                <li class="comment-item">
                    <div class="comment-heading clearfix">
                        <div class="comment-author-meta">
                            <h4>{{$comment->author_name}}
                                <small>{{$comment->created_at->diffForHumans()}}</small>
                            </h4>
                        </div>
                    </div>
                    <div class="comment-content">
                        <p>{!! Markdown::convertToHtml(e($comment->body)) !!}</p>
                    </div>
                </li>
            @endforeach
        </ul>

    </div>

    <div class="comment-footer padding-10">
        <h3>Leave a comment</h3>

        @include('layouts.admin.include.flash_messages')

        {!! Form::open(['route'=>['blog.comments', $post->id]]) !!}
            <div class="form-group required {{$errors->has('author_name')? 'has-error': ''}}">
                <label for="name">Name</label>
                {!! Form::text('author_name', null, ['class'=>'form-control']) !!}
                @if($errors->has('author_name'))
                    <span class="help-block">
                        <strong>{{$errors->first('author_name')}}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group required {{$errors->has('author_email')? 'has-error': ''}}">
                <label for="email">Email</label>
                {!! Form::text('author_email', null, ['class'=>'form-control']) !!}
                @if($errors->has('author_email'))
                    <span class="help-block">
                        <strong>{{$errors->first('author_email')}}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="website">Website</label>
                {!! Form::text('author_url', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group required {{$errors->has('body')? 'has-error': ''}}">
                <label for="comment">Comment</label>
                {!! Form::textarea('body', null, ['rows'=>5,'class'=>'form-control']) !!}
                @if($errors->has('body'))
                    <span class="help-block">
                        <strong>{{$errors->first('body')}}</strong>
                    </span>
                @endif
            </div>
            <div class="clearfix">
                <div class="pull-left">
                    <button type="submit" class="btn btn-lg btn-success">Submit</button>
                </div>
                <div class="pull-right">
                    <p class="text-muted">
                        <span class="required">*</span>
                        <em>Indicates required fields</em>
                    </p>
                </div>
            </div>
        {!! Form::close() !!}
    </div>

</article>
