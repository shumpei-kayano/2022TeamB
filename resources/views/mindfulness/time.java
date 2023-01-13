	//開始前カウント
	int prepareCountDown=3;
 
	//タイマー
	Timer timer = new Timer();
	TimerTask task = new TimerTask() {
 
		@Override
		public void run() {
			if ( prepareCountDown > 0 ) {
				prepareCountDown--;
				if ( prepareCountDown == 0 ) {
					AppManager.startSE();
				} else {
					AppManager.countSE();
				}
			} else {
				timer.cancel();
			}
		}
	};