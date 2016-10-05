<div id="top"><div id="time">Time Not Synced</div></div>
<div id=head><?php require("resources/head.php"); ?></div>
<div id=user><?php require("resources/user-management/user.php"); ?></div>

<script>
function goBack() {
    window.history.back();
}
</script>

<button class="button" onclick="location.href='index.php';">Home</button>
<button class="button" onclick="goBack()">Back</button>

<h1><?php echo $page; ?></h1>