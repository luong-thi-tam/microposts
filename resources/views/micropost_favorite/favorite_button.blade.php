@if (Auth::user()->isFavorited($micropost->id))
<!-- お気に入り解除ボタン -->
<form action="{{ route('favorites.unfavorite', $micropost->id) }}" method="POST" class="flex">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-error btn-sm normal-case">
        <i class="fas fa-heart"></i> Unfavorite
    </button>
</form>
@else
<!-- お気に入り追加ボタン -->
<form action="{{ route('favorites.favorite', $micropost->id) }}" method="POST" class="flex">
    @csrf
    <button type="submit" class="btn btn-primary btn-sm normal-case">
        <i class="far fa-heart"></i> Favorite
    </button>
</form>
@endif