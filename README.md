##렌트카 예약 시스템 Route

1. 렌트카예약시스템 리스트 
    http://127.0.0.1:8000/cars  -> name : list

2. 차량 등록 페이지
    http://127.0.0.1:8000/cars/create  -> name : create

3. 차량별 예약 정보 확인 페이지
    http://127.0.0.1:8000/cars/{id}  -> name : show
   
    ex)http://127.0.0.1:8000/cars/17

5. 차량 예약 페이지
http://127.0.0.1:8000/cars/reservation/{id}  -> name : reservation

ex)http://127.0.0.1:8000/cars/reservation/16 


##렌트카예약시스템 로컬실행

렌트카 예약시스템을 로컬에서 실행하기 위해, 라라벨 프레임워크 설치 및 개발환경 구축을 일부 기록하였습니다.

xampp설치

composer 설치

-파일 설치 위치 변경

-필요시 C:\xampp\php\php.ini 파일을 수정
extension=zip 을 검색하여 주석을 제거

$ composer global require "laravel/installer"

환경변수 설정(시스템 변수)

변수이름 : laravel

변수 값 : C:\Users\사용자명\AppData\Roaming\Composer\vendor\bin
