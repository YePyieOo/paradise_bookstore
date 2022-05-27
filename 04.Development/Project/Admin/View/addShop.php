<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Shop</title>
    <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../resource/css/style.css" />
    <link rel="stylesheet" href="../resource/css/addShop.css">
    <script src="../resource/UI Library/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script src="../resource/js/authorInfo.js"></script>
    <script src="../resource/UI Library/jquery-3.3.1.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 my-nav" id="navbar">
                <!-- <div class="h3 text-break mt-4 text-light">Paradise Book </div>
                <div class="h3 text-light">Store</div>
                <div class="btn-group-vertical container mb-4">
                    <button type="button" class="btn btn-light text-break mt-4">
                        <ion-icon name="apps-outline" class="icon"></ion-icon>
                        <span>Dashboard</span>
                    </button>
                    <button type="button" class="btn btn-light text-break mt-4">
                        <ion-icon name="book-outline"></ion-icon>
                        <span>Book Info</span>
                    </button>
                    <button type="button" class="btn btn-light text-break mt-4">
                        <ion-icon name="bookmarks-outline"></ion-icon>
                        <span>Author Info</span>
                    </button>
                    <button type="button" class="btn btn-light text-break mt-4">
                        <ion-icon name="home-outline"></ion-icon>
                        <span>Shop Info</span>
                    </button>
                    <button type="button" class="btn btn-light text-break mt-4">
                        <ion-icon name="person-outline"></ion-icon>
                        <span>User Info</span>
                    </button>
                    <button type="button" class="btn btn-light text-break mt-4">
                        <ion-icon name="document-outline"></ion-icon>
                        <span>Order Info</span>
                    </button>
                    <button type="button" class="btn btn-light text-break mt-4">
                        <ion-icon name="sparkles-outline"></ion-icon>
                        <span>Community</span>
                    </button>
                    <button type="button" class="btn btn-light text-break mt-4">
                        <ion-icon name="settings-outline"></ion-icon>
                        <span>Setting</span>
                    </button>
                    <button type="button" class="btn btn-light text-break mt-4 logout">Logout</button>
                </div> -->
            </div>
            <!-- Input Box -->
            <div class="col-10 bg-light ">
                <button class="mt-4 bg-warning col-1"><a href="../View/shopInfo.php" class="col-1">Back</a></button>
                <p class="h4 mt-4">Inser Shop</p>
                <form>
                    <div class="row container col-md-5 mt-4 ">
                        <div class="row">
                            <div class="col mb-3 mt-3">
                                <label for="email" class="form-label">Shop</label><br>
                                <select name="" id="">
                                    <option value="Yangon">Yangon</option>
                                    <option value="Mandalay">Mandalay</option>
                                    <option value="Nay Pyi Taw">Nay Pyi Taw</option>
                                </select>
                            </div>
                            <div class="col mb-3 mt-3 ms-4">
                                <label for="pwd" class="form-label">Name</label>
                                <input type="text" class="form-control" id="pwd" name="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3 mt-3 ">
                                <label for="email" class="form-label">Phone</label>
                                <input type="email" class="form-control" id="email" name="">
                            </div>
                            <div class="col mb-3 mt-3 ms-4">
                                <label for="pwd" class="form-label">Website</label>
                                <input type="text" class="form-control" id="pwd" name="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3 mt-3 ">
                                <label for="email" class="form-label">Phone</label>
                                <input type="file" class="form-control" id="email" name="">
                            </div>
                        </div>
                        <div class="row">
                            <label for="comment">Address</label>
                            <textarea class="form-control" rows="8" id="comment" name="text"></textarea>
                        </div>
                        <button type="submit" class="btn-warning fw-bold mt-4">Upload Shop</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>