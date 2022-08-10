<script>   
	export default{
		name: "PreLoader"
	}
</script>


<template>
	<div class="container medium">
		<div class="circle"></div>
		<div class="circle_dois"></div>
	</div>
</template>

<style scoped>

.container{
	position: relative;
	display: flex;
	justify-content: center;
	align-items: center;
}

.container.medium{
	width: 100px;
	height: 100px;
}


.circle{
	position: absolute;
	width: 100%;
	height: 100%;
	background: transparent;
	border: 4px solid rgb(226 232 240);
	border-left-color: rgb(251 146 60);
	border-radius:  100%;
	animation: move 0.6s cubic-bezier(.17,.67,.83,.67) infinite;
}
.circle_dois{
	position: absolute;
	width: 100%;
	height: 100%;
	background: transparent;
	border:  4px solid transparent;
	border-right-color: rgb(249 115 22);
	border-radius:  100%;
	animation: move_dois 0.5s cubic-bezier(.58,.17,.47,.88) infinite;
	filter: drop-shadow(0px 0px 4px rgba(251, 146, 60, 0.7));
}

		@keyframes symbol {
			0% { transform: scale(1);}
			50% { transform: scale(1.1);}
			100% { transform: scale(1);}
		}

		@keyframes move {
			to {
				transform: rotate(360deg) ;
			}
		}
		@keyframes move_dois {
			to {
				transform: rotate(360deg) ;
			}
		}


</style>