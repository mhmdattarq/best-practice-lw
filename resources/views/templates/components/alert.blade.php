<?php

use Livewire\Component;
use Livewire\Attributes\On;

new class extends Component {
    public $isShow = false;
    public $type = null;
    public $msg = null;

    #[On('alert-show')]
    public function show($type, $msg)
    {
        $this->type = $type;
        $this->msg = $msg;
        $this->isShow = true;
    }
};
?>

<div>
    @if ($isShow)
        <div class="alert alert-{{ $type }} alert-dismissible" role="alert">
            {{ $msg }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
</div>
