var app = angular.module('app', [])
    .controller('appController', ['$scope', '$http',
        function($scope, $http) {
            $scope.product = {};
            $scope.productArray = [];
            $scope.device = [{
                    "deviceFlag": false,
                    "deviceName": "Product Review",
                    "deviceImg": "files/images/start_project/product_review.png"
                },
                {
                    "deviceFlag": false,
                    "deviceName": "Web",
                    "deviceImg": "files/images/start_project/web.png"
                },
                {
                    "deviceFlag": false,
                    "deviceName": "Mobile",
                    "deviceImg": "files/images/start_project/mobile.png"
                },
                {
                    "deviceFlag": false,
                    "deviceName": "Branding",
                    "deviceImg": "files/images/start_project/branding.png"
                },
                {
                    "deviceFlag": false,
                    "deviceName": "AR/VR/MR",
                    "deviceImg": "files/images/start_project/ar_vr_mr.png"
                }
            ];

            $scope.deviceType = function(name, id, flag) {
                if (flag) {
                    for (var i = 0; i < $scope.device.length; i++) {
                        if (name == $scope.device[i].deviceName) {
                            $scope.device[i].deviceFlag = true;
                            $scope.productArray.push($scope.device[i].deviceName);
                            return;
                        }
                    }
                }
                if (!flag) {
                    for (var i = 0; i < $scope.productArray.length; i++) {
                        if (name == $scope.productArray[i]) {
                            $scope.device[id].deviceFlag = false;
                            $scope.productArray.splice(i, 1);
                            return;
                        }
                    }
                }
            };

            // php insert data

            $scope.btnName = "Insert";
            $scope.insertdata = function() {
                    $http.post("insert.php", { 'id': $scope.id, 'name': $scope.name, 'company': $scope.company, 'email': $scope.email, 'mobile': $scope.mobile, 'btnName': $scope.btnName })
                        .success(function(data) {
                            // $scope.displayStud();
                            alert("inserted data");
                            // console.log(data);

                        })
                      
                }
         
            
//            device name check box validation
          $scope.countChecked = function(){
    var count = 0;
    angular.forEach($scope.device, function(value){
        if (value.deviceFlag) count++;
    });

    return count;
}
//          
//          device data inserting to mysql
//          --------------------------------------------------------
            $scope.btnName2 = "Device";
            $scope.devicedata = function() {
                    $http.post("device_check_box.php", { 'devicename': $scope.productArray,'btnName2': $scope.btnName2 })
                        .success(function(data) {
                            // $scope.displayStud();
                            alert("inserted device data");
                            // console.log(data);

                        })
                      
                }
//          
          
        }
    ]);