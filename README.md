# 렌트카 예약 시스템

## Route

1. 등록된 차량 리스트 페이지
    http://127.0.0.1:8000/cars  -> name : list

2. 차량 등록 페이지
    http://127.0.0.1:8000/cars/create  -> name : create

3. 차량별 예약 정보 확인 페이지
    http://127.0.0.1:8000/cars/1  -> name : show
   
5. 차량 예약 페이지
    http://127.0.0.1:8000/cars/reservation/1  -> name : reservation
   


## DB tables

1. cars table

    id	        차량idx(PK)

    cev	        연료(전기차, 휘발유)

    csize	      사이즈(소형, 중형, 대형, SUV)

    cmodel	    모델

    cmaker	    제조사

    cnum	      차량번호

    cmoney	    렌트비용



2. reservs table

    id	        예약idx(PK)

    cid	        차량idx(FK)

    started_at  예약시작일	

    ended_at	  예약종료일

