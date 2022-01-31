<template>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Hangman</h3>
                </div>
                <div class="card-body">
                    <hangman-game lang="EN" />
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Crossword</h3>
                </div>
                <div class="card-body">
                    <crossword-game lang="EN" />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import 'vue-games';

    export default {}
</script>