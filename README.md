# kakoho-webserver
App that recommends the most appropriate appointment place with friends

## Install It

```
1. cd (~InstallPath)/htdocs/.
2. git clone https://github.com/minjaeJo/kakoho-webserver.git
3. mv ./kakoho-webserver ./
4. connect http://localhost:8888
```

![kakoho](https://github.com/minjaeJo/kakoho-webserver/blob/master/kakoho.png?raw=true)

## Todo

- [x] Ncloud Platform Server IaaS(Infrastructure as a Service) 만들기
- [x] Ncloud Platform 에 CodeIgniter Framework 세팅하기
- [x] MYSQL 데이터 스키마 생성
- [x] Google Maps API 환경 세팅 및 연동
- [x] 모바일 및 데스크탑에서도 적용되는 반응형 웹앱 - Bootstrap 사용
- [x] 서울 지하철 GPS 좌표 DB 데이터 스키마 생성 및 링킹 완료
- [x] [주소 입력 폼] 입력 => [입력하기] 버튼 누를시, Google Map [Geocoding API](https://developers.google.com/maps/documentation/geocoding/start?hl=ko) Request
- [x] Geocoding API Response => Map 위 해당 GPS 좌표에 핀찍기
- [x] Data Model 생성 후, 입력받은 좌표 저장
- [x] 입력받은 좌표의 중심 계산 메소드 
- [x] 중심 좌표로부터 반경 1km안의 가장 가까운 지하철 계산 메소드
- [x] 지도 위 마커 모두 지우고 지하철 위치 안내