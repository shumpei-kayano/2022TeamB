<script>
<h2><span id="result" class="badge bg-primary">カウントダウン</span></h2>

<script>

for (let i = 0; i < 6; i++) {
  // result.textContentはdocument.getElementById('result');を省略
  setTimeout(() => { result.textContent = (5 - i) ; }, i * 1000);
}

</script>