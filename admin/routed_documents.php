<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/routed_documents.css">
    <link rel="icon" href="images/logo.png" type="image/png">
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="sidebar-header">
                <div class="logo-container">
                    <img src="images/logo.png" alt="Logo" class="logo">
                </div>
                <div class="title-container">
                    <h2>Pangasinan</h2>
                    <p>Legislative Information System</p>
                </div>
            </div>
            <div class="navigations">
                <nav class="sidebar-nav">
                    <!-- Home Section -->
                    <div class="nav-section">
                    <div class="nav-label">HOME</div>
                    <ul>
                        <li class="nav-item">
                            <a href="admin_dashboard.php">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.143 4H4.857C4.62971 4 4.41173 4.09029 4.25101 4.25101C4.09029 4.41173 4 4.62971 4 4.857V9.143C4 9.616 4.384 10 4.857 10H9.143C9.37029 10 9.58827 9.90971 9.74899 9.74899C9.90971 9.58827 10 9.37029 10 9.143V4.857C10 4.62971 9.90971 4.41173 9.74899 4.25101C9.58827 4.09029 9.37029 4 9.143 4ZM19.143 4H14.857C14.6297 4 14.4117 4.09029 14.251 4.25101C14.0903 4.41173 14 4.62971 14 4.857V9.143C14 9.616 14.384 10 14.857 10H19.143C19.3703 10 19.5883 9.90971 19.749 9.74899C19.9097 9.58827 20 9.37029 20 9.143V4.857C20 4.62971 19.9097 4.41173 19.749 4.25101C19.5883 4.09029 19.3703 4 19.143 4ZM9.143 14H4.857C4.62971 14 4.41173 14.0903 4.25101 14.251C4.09029 14.4117 4 14.6297 4 14.857V19.143C4 19.616 4.384 20 4.857 20H9.143C9.37029 20 9.58827 19.9097 9.74899 19.749C9.90971 19.5883 10 19.3703 10 19.143V14.857C10 14.6297 9.90971 14.4117 9.74899 14.251C9.58827 14.0903 9.37029 14 9.143 14ZM19.143 14H14.857C14.6297 14 14.4117 14.0903 14.251 14.251C14.0903 14.4117 14 14.6297 14 14.857V19.143C14 19.616 14.384 20 14.857 20H19.143C19.3703 20 19.5883 19.9097 19.749 19.749C19.9097 19.5883 20 19.3703 20 19.143V14.857C20 14.6297 19.9097 14.4117 19.749 14.251C19.5883 14.0903 19.3703 14 19.143 14Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Dashboard
                            </a>
                        </li>
                    </ul>
                    </div>
                    
                    <!-- Document Management Section -->
                    <div class="nav-section">
                    <div class="nav-label active">DOCUMENT MANAGEMENT</div>
                    <ul>
                        <li class="nav-item">
                            <a href="drafts.php">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18 5V4C18 3.73478 17.8946 3.48043 17.7071 3.29289C17.5196 3.10536 17.2652 3 17 3H8.914C8.6488 3.00006 8.39449 3.10545 8.207 3.293L4.293 7.207C4.10545 7.39449 4.00006 7.64881 4 7.914V20C4 20.2652 4.10536 20.5196 4.29289 20.7071C4.48043 20.8946 4.73478 21 5 21H17C17.2652 21 17.5196 20.8946 17.7071 20.7071C17.8946 20.5196 18 20.2652 18 20V15M9 3V7C9 7.26522 8.89464 7.51957 8.70711 7.70711C8.51957 7.89464 8.26522 8 8 8H4M15.383 8.772L18.128 11.518M19.343 7.612C19.7344 8.00371 19.9542 8.53478 19.9542 9.0885C19.9542 9.64222 19.7344 10.1733 19.343 10.565L12.693 17.211L9 17.95L9.739 14.258L16.385 7.612C16.5789 7.41722 16.8094 7.26267 17.0632 7.15721C17.317 7.05175 17.5892 6.99746 17.864 6.99746C18.1388 6.99746 18.411 7.05175 18.6648 7.15721C18.9186 7.26267 19.1491 7.41722 19.343 7.612Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>    
                                Drafts
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="routed_documents.php">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 10V4C19 3.73478 18.8946 3.48043 18.7071 3.29289C18.5196 3.10536 18.2652 3 18 3H9.914C9.6488 3.00006 9.39449 3.10545 9.207 3.293L5.293 7.207C5.10545 7.39449 5.00006 7.64881 5 7.914V20C5 20.2652 5.10536 20.5196 5.29289 20.7071C5.48043 20.8946 5.73478 21 6 21H18C18.2652 21 18.5196 20.8946 18.7071 20.7071C18.8946 20.5196 19 20.2652 19 20V18M10 3V7C10 7.26522 9.89464 7.51957 9.70711 7.70711C9.51957 7.89464 9.26522 8 9 8H5M10 14H19M19 14L17 12M19 14L17 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Routed Documents
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="communications.php">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 9H12M15 9H17M7 12H9M12 12H17M5 5H19C19.2652 5 19.5196 5.10536 19.7071 5.29289C19.8946 5.48043 20 5.73478 20 6V15C20 15.2652 19.8946 15.5196 19.7071 15.7071C19.5196 15.8946 19.2652 16 19 16H12.384C12.1366 15.9998 11.8978 16.0914 11.714 16.257L8.834 18.849C8.76212 18.9135 8.67309 18.9558 8.57767 18.9708C8.48226 18.9859 8.38453 18.9729 8.29632 18.9336C8.20811 18.8942 8.13318 18.8302 8.08059 18.7491C8.02801 18.6681 8.00002 18.5736 8 18.477V17C8 16.7348 7.89464 16.4804 7.70711 16.2929C7.51957 16.1054 7.26522 16 7 16H5C4.73478 16 4.48043 15.8946 4.29289 15.7071C4.10536 15.5196 4 15.2652 4 15V6C4 5.73478 4.10536 5.48043 4.29289 5.29289C4.48043 5.10536 4.73478 5 5 5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Communications
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="filed_documents.php">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 3V7C10 7.26522 9.89464 7.51957 9.70711 7.70711C9.51957 7.89464 9.26522 8 9 8H5M9 14L11 16L15 12M19 4V20C19 20.2652 18.8946 20.5196 18.7071 20.7071C18.5196 20.8946 18.2652 21 18 21H6C5.73478 21 5.48043 20.8946 5.29289 20.7071C5.10536 20.5196 5 20.2652 5 20V7.914C5.00006 7.64881 5.10545 7.39449 5.293 7.207L9.207 3.293C9.39449 3.10545 9.6488 3.00006 9.914 3H18C18.2652 3 18.5196 3.10536 18.7071 3.29289C18.8946 3.48043 19 3.73478 19 4Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Filed Documents
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="archived_documents.php">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.5 8H4M4 6V19C4 19.2652 4.10536 19.5196 4.29289 19.7071C4.48043 19.8946 4.73478 20 5 20H19C19.2652 20 19.5196 19.8946 19.7071 19.7071C19.8946 19.5196 20 19.2652 20 19V9C20 8.73478 19.8946 8.48043 19.7071 8.29289C19.5196 8.10536 19.2652 8 19 8H13.968C13.8214 7.99995 13.6767 7.96767 13.5439 7.90546C13.4112 7.84325 13.2938 7.75262 13.2 7.64L11.3 5.36C11.2062 5.24738 11.0888 5.15675 10.9561 5.09454C10.8233 5.03233 10.6786 5.00005 10.532 5H5C4.73478 5 4.48043 5.10536 4.29289 5.29289C4.10536 5.48043 4 5.73478 4 6Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Archived Documents
                            </a>
                        </li>
                    </ul>
                    </div>
                    
                    <!-- Reports & Audit Section -->
                    <div class="nav-section">
                    <div class="nav-label">REPORTS & AUDIT</div>
                    <ul>
                        <li class="nav-item">
                            <a href="report_generation.php">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 3V7C10 7.26522 9.89464 7.51957 9.70711 7.70711C9.51957 7.89464 9.26522 8 9 8H5M9 18V16M12 18V12M15 18V15M19 4V20C19 20.2652 18.8946 20.5196 18.7071 20.7071C18.5196 20.8946 18.2652 21 18 21H6C5.73478 21 5.48043 20.8946 5.29289 20.7071C5.10536 20.5196 5 20.2652 5 20V7.914C5.00006 7.64881 5.10545 7.39449 5.293 7.207L9.207 3.293C9.39449 3.10545 9.6488 3.00006 9.914 3H18C18.2652 3 18.5196 3.10536 18.7071 3.29289C18.8946 3.48043 19 3.73478 19 4Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Report Generation
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="logs_history.php">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 8V12L15 15M3.22302 14C4.13247 18.008 7.71683 21 12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C8.27084 3 5.07142 5.26806 3.70591 8.5M7 9H3V5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Logs & History
                            </a>
                        </li>
                    </ul>
                    </div>
                    
                    <!-- System Archive Section -->
                    <div class="nav-section">
                    <div class="nav-label">SYSTEM ARCHIVE</div>
                    <ul>
                        <li class="nav-item">
                            <a href="archive.php">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 12V13H14V12M18 19H6C5.73478 19 5.48043 18.8946 5.29289 18.7071C5.10536 18.5196 5 18.2652 5 18V9H19V18C19 18.2652 18.8946 18.5196 18.7071 18.7071C18.5196 18.8946 18.2652 19 18 19ZM4 5H20C20.2652 5 20.5196 5.10536 20.7071 5.29289C20.8946 5.48043 21 5.73478 21 6V8C21 8.26522 20.8946 8.51957 20.7071 8.70711C20.5196 8.89464 20.2652 9 20 9H4C3.73478 9 3.48043 8.89464 3.29289 8.70711C3.10536 8.51957 3 8.26522 3 8V6C3 5.73478 3.10536 5.48043 3.29289 5.29289C3.48043 5.10536 3.73478 5 4 5Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                                </svg>
                                Archive
                            </a>
                        </li>
                    </ul>
                    </div>
                    
                    <!-- System Section -->
                    <div class="nav-section">
                    <div class="nav-label">SYSTEM</div>
                    <ul>
                        <li class="nav-item">
                            <a href="settings.php">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.59372 3.94C9.68372 3.398 10.1537 3 10.7037 3H13.2967C13.8467 3 14.3167 3.398 14.4067 3.94L14.6197 5.221C14.6827 5.595 14.9327 5.907 15.2647 6.091C15.3387 6.131 15.4117 6.174 15.4847 6.218C15.8097 6.414 16.2047 6.475 16.5597 6.342L17.7767 5.886C18.0261 5.79221 18.3007 5.78998 18.5516 5.87971C18.8025 5.96945 19.0134 6.14531 19.1467 6.376L20.4427 8.623C20.5758 8.8537 20.6227 9.12413 20.5751 9.38617C20.5275 9.6482 20.3884 9.88485 20.1827 10.054L19.1797 10.881C18.8867 11.122 18.7417 11.494 18.7497 11.873C18.7511 11.958 18.7511 12.043 18.7497 12.128C18.7417 12.506 18.8867 12.878 19.1797 13.119L20.1837 13.946C20.6077 14.296 20.7177 14.901 20.4437 15.376L19.1457 17.623C19.0126 17.8536 18.8019 18.0296 18.5512 18.1195C18.3005 18.2094 18.0261 18.2074 17.7767 18.114L16.5597 17.658C16.2047 17.525 15.8097 17.586 15.4837 17.782C15.4112 17.8261 15.3379 17.8688 15.2637 17.91C14.9327 18.093 14.6827 18.405 14.6197 18.779L14.4067 20.06C14.3167 20.603 13.8467 21 13.2967 21H10.7027C10.1527 21 9.68372 20.602 9.59272 20.06L9.37972 18.779C9.31772 18.405 9.06772 18.093 8.73572 17.909C8.66157 17.8681 8.58822 17.8258 8.51572 17.782C8.19072 17.586 7.79572 17.525 7.43972 17.658L6.22272 18.114C5.97345 18.2075 5.69908 18.2096 5.44842 18.1199C5.19775 18.0302 4.98703 17.8545 4.85372 17.624L3.55672 15.377C3.42366 15.1463 3.37676 14.8759 3.42437 14.6138C3.47198 14.3518 3.61101 14.1152 3.81672 13.946L4.82072 13.119C5.11272 12.879 5.25772 12.506 5.25072 12.128C5.24915 12.043 5.24915 11.958 5.25072 11.873C5.25772 11.493 5.11272 11.122 4.82072 10.881L3.81672 10.054C3.61126 9.88489 3.47239 9.64843 3.42479 9.38662C3.37719 9.12481 3.42393 8.8546 3.55672 8.624L4.85372 6.377C4.9869 6.14614 5.19773 5.97006 5.44863 5.88014C5.69953 5.79021 5.97421 5.79229 6.22372 5.886L7.43972 6.342C7.79572 6.475 8.19072 6.414 8.51572 6.218C8.58772 6.174 8.66172 6.132 8.73572 6.09C9.06772 5.907 9.31772 5.595 9.37972 5.221L9.59372 3.94Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15 12C15 12.7956 14.6839 13.5587 14.1213 14.1213C13.5587 14.6839 12.7956 15 12 15C11.2044 15 10.4413 14.6839 9.87868 14.1213C9.31607 13.5587 9 12.7956 9 12C9 11.2044 9.31607 10.4413 9.87868 9.87868C10.4413 9.31607 11.2044 9 12 9C12.7956 9 13.5587 9.31607 14.1213 9.87868C14.6839 10.4413 15 11.2044 15 12Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Settings
                            </a>
                        </li>
                    </ul>
                    </div>
                </nav>
                </div>
                <div class="user-logout-container">
                    <div class="username-footer">
                        <div class="profile-container">
                            <img src="images/pfp.png" alt="Profile" class="profile">
                        </div>
                        <div class="username-container">
                            <h2>Kitty Cat</h2>
                            <p>Admin</p>
                        </div>
                        <div class="logout-container">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" class="logout-icon">
                                <path d="M25 15H10M25 15L20 20M25 15L20 10M11.25 5H8.75C7.75544 5 6.80161 5.39509 6.09835 6.09835C5.39509 6.80161 5 7.75544 5 8.75V21.25C5 22.2446 5.39509 23.1984 6.09835 23.9017C6.80161 24.6049 7.75544 25 8.75 25H11.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>
        </aside>
        <header>
            <div class="header-container">
                <div class="header-functions left">
                    <div class="sidebar-toggle">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.6875 8.4375H25.3125M4.6875 15H25.3125M4.6875 21.5625H15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="header-navigations">
                        <ul>
                            <li>
                                <a href="#" class="nav-item chat">Chat</a>
                            </li>
                            <li>
                                <a href="#" class="nav-item calendar">Calendar</a>
                            </li>
                            <li>
                                <a href="#" class="nav-item notes">Notes</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="header-functions right">
                    <div class="search">
                        <form action="#" method="GET" class="search-form">
                            <svg class="search-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.5 17.5L14.5833 14.5833M14.1667 8.33333C14.1667 9.09938 14.0158 9.85792 13.7226 10.5657C13.4295 11.2734 12.9998 11.9164 12.4581 12.4581C11.9164 12.9998 11.2734 13.4295 10.5657 13.7226C9.85792 14.0158 9.09938 14.1667 8.33333 14.1667C7.56729 14.1667 6.80875 14.0158 6.10101 13.7226C5.39328 13.4295 4.75022 12.9998 4.20854 12.4581C3.66687 11.9164 3.23719 11.2734 2.94404 10.5657C2.65088 9.85792 2.5 9.09938 2.5 8.33333C2.5 6.78624 3.11458 5.30251 4.20854 4.20854C5.30251 3.11458 6.78624 2.5 8.33333 2.5C9.88043 2.5 11.3642 3.11458 12.4581 4.20854C13.5521 5.30251 14.1667 6.78624 14.1667 8.33333Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                            <input type="text" name="search" placeholder="Search..." class="search-bar">
                        </form>
                    </div>
                    <div class="function-icons">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.9997 26.25C12.0705 26.2494 9.25712 25.1064 7.15751 23.0639C5.0579 21.0215 3.8377 18.2407 3.7563 15.3126C3.6749 12.3846 4.73873 9.54027 6.72162 7.38432C8.70452 5.22837 11.4501 3.93082 14.3747 3.7675V3.75C13.9322 4.9575 13.7497 6.13875 13.7497 7.5C13.7497 10.4837 14.935 13.3452 17.0448 15.455C19.1545 17.5647 22.016 18.75 24.9997 18.75C25.2985 18.75 25.3172 18.7725 25.6097 18.75C24.8334 20.9435 23.3963 22.8425 21.4963 24.1857C19.5962 25.5288 17.3266 26.25 14.9997 26.25Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 6.70625V3.75M15 6.70625C16.7314 6.77276 18.369 7.51013 19.5664 8.7624C20.7639 10.0147 21.4273 11.6836 21.4162 13.4162V15.6662C21.4162 18.6487 23.75 19.3938 23.75 20.885C23.75 21.6263 23.75 22.5 23.0775 22.5H6.9225C6.25 22.5 6.25 21.6263 6.25 20.885C6.25 19.3938 8.58375 18.6487 8.58375 15.6662V13.4162C8.57274 11.6836 9.23611 10.0147 10.4336 8.7624C11.631 7.51013 13.2686 6.77276 15 6.70625ZM10.9162 22.5C11.0337 23.565 11.2988 24.425 12.0963 25.14C12.8942 25.8554 13.9283 26.2511 15 26.2511C16.0717 26.2511 17.1058 25.8554 17.9037 25.14C18.7012 24.425 19.4487 23.565 19.5662 22.5H10.9162Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="profile-active">
                        <div class="username-header">
                            <div class="profile-container">
                                <img src="images/pfp.png" alt="Profile" class="profile header">
                                <div class="active-status"></div>
                            </div>
                            <div class="username-container header">
                                <h2>Kitty</h2>
                                <p>Admin</p>
                            </div>
                        </div>
                    </div> 
            </div>
        </header>
        <main class="main-content">
            <div class="subheader">
                <div class="document-navs left">
                    <div class="document-navs">
                        <ul>
                            <li>
                                <a href="#" class="document-nav on-going active">On going</a>
                            </li>
                            <li>
                                <a href="#" class="document-nav completed">Completed</a>
                            </li>
                            <li>
                                <a href="#" class="document-nav withdrawn">Withdrawn</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="button right">
                    <div class="route-button-container">
                        <a href="#">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.24828 19.0001C3.22028 15.7701 5.27528 8.23209 12.4663 8.23209V6.07909C12.4576 5.8845 12.5045 5.69147 12.6016 5.52258C12.6986 5.3537 12.8418 5.21597 13.0143 5.12552C13.1868 5.03507 13.3815 4.99564 13.5756 5.01186C13.7697 5.02808 13.9552 5.09927 14.1103 5.21709L19.5893 9.52409C19.7177 9.62796 19.8213 9.75923 19.8924 9.90828C19.9636 10.0573 20.0005 10.2204 20.0005 10.3856C20.0005 10.5508 19.9636 10.7138 19.8924 10.8629C19.8213 11.012 19.7177 11.1432 19.5893 11.2471L14.1093 15.5541C13.9541 15.6711 13.7689 15.7417 13.5752 15.7576C13.3815 15.7734 13.1873 15.734 13.0152 15.6438C12.8431 15.5536 12.7001 15.4163 12.6029 15.248C12.5057 15.0797 12.4583 14.8873 12.4663 14.6931V12.5391C5.27528 13.6161 4.24828 19.0001 4.24828 19.0001Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        Route File
                        </a>
                    </div>
                </div>
            </div>

            <div class="document-updates">
                <div class="title-and-search-container">
                    <div class="title-and-search-container title">
                        <h2>Document Updates</h2>
                        <p>Quick access to updates and document history</p>
                    </div>
                    <div class="title-and-search-container search-and-sort">
                        <div class="search">
                            <form action="#" method="GET" class="search-form">
                                <svg class="search-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.5 17.5L14.5833 14.5833M14.1667 8.33333C14.1667 9.09938 14.0158 9.85792 13.7226 10.5657C13.4295 11.2734 12.9998 11.9164 12.4581 12.4581C11.9164 12.9998 11.2734 13.4295 10.5657 13.7226C9.85792 14.0158 9.09938 14.1667 8.33333 14.1667C7.56729 14.1667 6.80875 14.0158 6.10101 13.7226C5.39328 13.4295 4.75022 12.9998 4.20854 12.4581C3.66687 11.9164 3.23719 11.2734 2.94404 10.5657C2.65088 9.85792 2.5 9.09938 2.5 8.33333C2.5 6.78624 3.11458 5.30251 4.20854 4.20854C5.30251 3.11458 6.78624 2.5 8.33333 2.5C9.88043 2.5 11.3642 3.11458 12.4581 4.20854C13.5521 5.30251 14.1667 6.78624 14.1667 8.33333Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                </svg>
                                <input type="text" name="search" placeholder="Search..." class="search-bar">
                            </form>
                        </div>
                        <div class="sort">
                            <div class="sort-container">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.796 4H5.20398C5.01174 3.99984 4.82352 4.05509 4.66187 4.15914C4.50022 4.26319 4.37199 4.41164 4.29253 4.58669C4.21308 4.76175 4.18577 4.956 4.21387 5.14618C4.24197 5.33636 4.32429 5.51441 4.45098 5.659L9.75298 11.717C9.91245 11.8995 10.0002 12.1337 9.99998 12.376V17.25C9.99998 17.3276 10.0181 17.4042 10.0528 17.4736C10.0875 17.543 10.1379 17.6034 10.2 17.65L13.2 19.9C13.2743 19.9557 13.3626 19.9896 13.4551 19.998C13.5476 20.0063 13.6405 19.9887 13.7236 19.9472C13.8066 19.9057 13.8765 19.8419 13.9253 19.7629C13.9741 19.6839 14 19.5929 14 19.5V12.376C13.9997 12.1337 14.0875 11.8995 14.247 11.717L19.549 5.658C20.115 5.012 19.655 4 18.796 4Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-container">
                    <div class="table-header-fixed">
                        <div class="table-header">
                            <div class="header-item" role="columnheader">#</div>
                            <div class="header-item" role="columnheader">Subject Matter</div>
                            <div class="header-item" role="columnheader">Document Type</div>
                            <div class="header-item" role="columnheader">Status</div>
                            <div class="header-item" role="columnheader">Division</div>
                            <div class="header-item" role="columnheader">Action</div>
                        </div> 
                    </div> 
                    <div class="table-body-scroll">
                        <div class="table">
                            <div class="data-cell">
                                <div class="table-row" role="row">
                                    <div class="table-cell" role="cell">2025-00001</div>
                                    <div class="table-cell" role="cell">An Ordinance Regulating Public Health and Safety Standards in Municipal Facilities</div>
                                    <div class="table-cell" role="cell">Provincial Ordinance</div>
                                    <div class="table-cell" role="cell"><span class="status-pending">Pending</span></div>
                                    <div class="table-cell" role="cell">SP Secretary</div>
                                    <div class="table-cell" role="cell">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21 12C21 13.2 16.97 18 12 18C7.03 18 3 13.2 3 12C3 10.8 7.03 6 12 6C16.97 6 21 10.8 21 12Z" stroke="currentColor" stroke-width="1.5"/>
                                            <path d="M15 12C15 12.7956 14.6839 13.5587 14.1213 14.1213C13.5587 14.6839 12.7956 15 12 15C11.2044 15 10.4413 14.6839 9.87868 14.1213C9.31607 13.5587 9 12.7956 9 12C9 11.2044 9.31607 10.4413 9.87868 9.87868C10.4413 9.31607 11.2044 9 12 9C12.7956 9 13.5587 9.31607 14.1213 9.87868C14.6839 10.4413 15 11.2044 15 12Z" stroke="currentColor" stroke-width="1.5"/>
                                        </svg>
                                    </div>
                                </div>
                        
                                <div class="table-row" role="row">
                                    <div class="table-cell" role="cell">2025-00002</div>
                                    <div class="table-cell" role="cell">Ordinance on the Maintenance of Public Health and Safety in Municipal Premises</div>
                                    <div class="table-cell" role="cell">Provincial Appropriation Ordinance</div>
                                    <div class="table-cell" role="cell"><span class="status-approved">Approved</span></div>
                                    <div class="table-cell" role="cell">Plenary</div>
                                    <div class="table-cell" role="cell">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21 12C21 13.2 16.97 18 12 18C7.03 18 3 13.2 3 12C3 10.8 7.03 6 12 6C16.97 6 21 10.8 21 12Z" stroke="currentColor" stroke-width="1.5"/>
                                            <path d="M15 12C15 12.7956 14.6839 13.5587 14.1213 14.1213C13.5587 14.6839 12.7956 15 12 15C11.2044 15 10.4413 14.6839 9.87868 14.1213C9.31607 13.5587 9 12.7956 9 12C9 11.2044 9.31607 10.4413 9.87868 9.87868C10.4413 9.31607 11.2044 9 12 9C12.7956 9 13.5587 9.31607 14.1213 9.87868C14.6839 10.4413 15 11.2044 15 12Z" stroke="currentColor" stroke-width="1.5"/>
                                        </svg>
                                    </div>
                                </div>

                                <div class="table-row" role="row">
                                    <div class="table-cell" role="cell">2025-00003</div>
                                    <div class="table-cell" role="cell">An Ordinance Ensuring Health and Safety Compliance in Municipal Buildings and Facilities</div>
                                    <div class="table-cell" role="cell">Provincial Ordinance</div>
                                    <div class="table-cell" role="cell"><span class="status-referred">Referred</span></div>
                                    <div class="table-cell" role="cell">Committee</div>
                                    <div class="table-cell" role="cell">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21 12C21 13.2 16.97 18 12 18C7.03 18 3 13.2 3 12C3 10.8 7.03 6 12 6C16.97 6 21 10.8 21 12Z" stroke="currentColor" stroke-width="1.5"/>
                                            <path d="M15 12C15 12.7956 14.6839 13.5587 14.1213 14.1213C13.5587 14.6839 12.7956 15 12 15C11.2044 15 10.4413 14.6839 9.87868 14.1213C9.31607 13.5587 9 12.7956 9 12C9 11.2044 9.31607 10.4413 9.87868 9.87868C10.4413 9.31607 11.2044 9 12 9C12.7956 9 13.5587 9.31607 14.1213 9.87868C14.6839 10.4413 15 11.2044 15 12Z" stroke="currentColor" stroke-width="1.5"/>
                                        </svg>
                                    </div>
                                </div>

                                <div class="table-row" role="row">
                                    <div class="table-cell" role="cell">2025-00004</div>
                                    <div class="table-cell" role="cell">Ordinance Prescribing Sanitation and Safety Measures for All Municipal Establishments</div>
                                    <div class="table-cell" role="cell">Provincial Ordinance</div>
                                    <div class="table-cell" role="cell"><span class="status-filed">Filed</span></div>
                                    <div class="table-cell" role="cell">Plenary</div>
                                    <div class="table-cell" role="cell">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21 12C21 13.2 16.97 18 12 18C7.03 18 3 13.2 3 12C3 10.8 7.03 6 12 6C16.97 6 21 10.8 21 12Z" stroke="currentColor" stroke-width="1.5"/>
                                            <path d="M15 12C15 12.7956 14.6839 13.5587 14.1213 14.1213C13.5587 14.6839 12.7956 15 12 15C11.2044 15 10.4413 14.6839 9.87868 14.1213C9.31607 13.5587 9 12.7956 9 12C9 11.2044 9.31607 10.4413 9.87868 9.87868C10.4413 9.31607 11.2044 9 12 9C12.7956 9 13.5587 9.31607 14.1213 9.87868C14.6839 10.4413 15 11.2044 15 12Z" stroke="currentColor" stroke-width="1.5"/>
                                        </svg>
                                    </div>
                                </div>

                                <div class="table-row" role="row">
                                    <div class="table-cell" role="cell">2025-00005</div>
                                    <div class="table-cell" role="cell">An Ordinance Prescribing Traffic and Parking Rules Within the Municipality</div>
                                    <div class="table-cell" role="cell">Provincial Ordinance</div>
                                    <div class="table-cell" role="cell"><span class="status-on-hold">On Hold</span></div>
                                    <div class="table-cell" role="cell">Plenary</div>
                                    <div class="table-cell" role="cell">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21 12C21 13.2 16.97 18 12 18C7.03 18 3 13.2 3 12C3 10.8 7.03 6 12 6C16.97 6 21 10.8 21 12Z" stroke="currentColor" stroke-width="1.5"/>
                                            <path d="M15 12C15 12.7956 14.6839 13.5587 14.1213 14.1213C13.5587 14.6839 12.7956 15 12 15C11.2044 15 10.4413 14.6839 9.87868 14.1213C9.31607 13.5587 9 12.7956 9 12C9 11.2044 9.31607 10.4413 9.87868 9.87868C10.4413 9.31607 11.2044 9 12 9C12.7956 9 13.5587 9.31607 14.1213 9.87868C14.6839 10.4413 15 11.2044 15 12Z" stroke="currentColor" stroke-width="1.5"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="pagination-container">
                        <div class="page">
                            <h2>1 of 32</h2>
                        </div>
                        <div class="pagination">
                            <div class="page-container left-arrow">
                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.6243 13.4584L5.66602 8.50008L10.6243 3.54175" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="page-container previous">
                                <h2>Previous</h2>
                            </div>
                            <div class="page-container active-page">
                                <h2>1</h2>
                            </div>
                            <div class="page-container">
                                <h2>2</h2>
                            </div>
                            <div class="page-container">
                                <h2>3</h2>
                            </div>
                            <div class="page-container next">
                                <h2>Next</h2>
                            </div>
                            <div class="page-container right-arrow">
                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.375 3.54175L11.3333 8.50008L6.375 13.4584" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <div id="routeDocumentModal" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Route File</h2>
                    <span class="close-modal">&times;</span>
                </div>
                <div class="modal-body">
                    <form id="originalDocumentForm" action="submit_original_document.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <span class="categorization">Document Information</span>
                        </div>

                        <div class="form-group">
                            <div class="input-areas">
                                <label for="tracking_number">Tracking Number</label>
                                <input type="text" class="tracking-number" id="tracking-number" name="tracking-number" required readonly>
                            </div>
                            <div class="input-areas">
                                <label for="date-received">Date Received</label>
                                <input type="date" class="date-received" id="date-received" name="date-received" required>
                            </div>
                            <div class="input-areas">
                                <label for="time-received">Time Received</label>
                                <input type="time" class="time-received" id="time-received" name="time-received" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-areas">
                                <label for="subject-matter">Subject Matter</label>
                                <input type="text" class="subject-matter" id="subject-matter" name="subject-matter" placeholder="Enter document subject" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <span class="categorization">Document Details</span>
                        </div>

                        <div class="form-group">
                            <div class="input-areas">
                                <label for="document-type">Document Type</label>
                                <select class="document-type" id="document-type" name="document-type" onchange="updateRoutingOptions()" required>
                                    <option value="" disabled selected>Select Document Type</option>
                                </select>
                            </div>
                            <div class="input-areas">
                                <label for="source-type">Source Type</label>
                                <select class="source-type" id="source-type" name="source-type" onchange="updateInput()" required>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="blank-areas"></div>

                            <div class="input-areas" id="sp-member-name">
                                <label for="sp-member-name">SP Member Name</label>
                                <input type="text" class="sp-member-name" id="sp-member-name" name="sp-member-name" placeholder="Enter SP Member Name" required>
                            </div>

                            <!-- <div class="input-areas" id="external-offices">
                                <label for="external-offices">Select External Office</label>
                                <select class="external-offices" id="external-offices" name="external-offices" required>
                                    <option value="" disabled selected>Select External Office</option>
                                </select>
                            </div>  

                            <div class="input-areas" id="external-hospitals">
                                <label for="external-hospitals">External Hospital Name</label>
                                <select class="external-hospitals" id="external-hospitals" name="external-hospitals" required>
                                    <option value="" disabled selected>Select External Hospital</option>
                                </select>                         
                            </div>

                            <div class="input-areas" id="agency-name">
                                <label for="agency-name">Agency Name</label>
                                <input type="text" class="agency-name" id="agency-name" name="agency-name" placeholder="Enter Agency Name" required>
                            </div>

                            <div class="input-areas" id="client-name">
                                <label for="client-name">Client Name</label>
                                <input type="text" class="client-name" id="client-name" name="client-name" placeholder="Enter Client Name" required>
                            </div> -->
                        </div>

                        <div class="form-group">
                            <span class="categorization">Location & Routing</span>
                        </div>

                        <div class="form-group">
                            <div class="input-areas">
                                <label for="pangasinan-municipalities-and-cities">Municipality/City</label>
                                <select class="pangasinan-municipalities-and-cities" id="pangasinan-municipalities-and-cities" name="pangasinan-municipalities-and-cities" required>
                                    <option value="" disabled selected>Select Municipality/City</option>
                                </select>
                            </div>
                            <div class="input-areas">
                                <label for="routing-options">Routing Options</label>
                                <select class="routing-options" id="routing-options" name="routing-options" onchange="updateCategory()" required>
                                    <option value="" disabled selected>Select Routing Option</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group" id="category">
                            <div class="input-areas" id="category-select">
                                <label for="category-select">Category</label>
                                <select class="category-select" id="category-select" name="category-select">
                                    <option value="" disabled selected>Select Category</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="categorization">Additional Information</span>
                        </div>

                        <div class="form-group">
                            <div class="input-areas">
                                <label for="remarks-or-notes">Remarks/Notes</label>
                                <textarea class="remarks-or-notes" id="remarks-or-notes" name="remarks-or-notes" placeholder="Enter additional marks or notes"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-areas">
                                <label for="file-upload">Attachment (Optional)</label>
                                <div class="drag-drop-area" id="dragDropArea">
                                    <div class="drag-drop-content">
                                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M25.0007 10.4168V29.1668M14.584 29.1668H10.4173C9.86478 29.1668 9.33488 29.3863 8.94418 29.777C8.55348 30.1677 8.33398 30.6976 8.33398 31.2502V39.5835C8.33398 40.136 8.55348 40.6659 8.94418 41.0566C9.33488 41.4473 9.86478 41.6668 10.4173 41.6668H39.584C40.1365 41.6668 40.6664 41.4473 41.0571 41.0566C41.4478 40.6659 41.6673 40.136 41.6673 39.5835V31.2502C41.6673 30.6976 41.4478 30.1677 41.0571 29.777C40.6664 29.3863 40.1365 29.1668 39.584 29.1668H35.4173M16.6673 18.7502L25.0007 8.3335L33.334 18.7502M35.4173 35.4168H35.4382" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <p>Drag & drop files here or <span class="browse-link">browse</span></p>
                                        <p>PDF, DOC, DOCX, JPG, PNG</p>
                                        <input type="file" id="file-upload" name="file-upload" multiple style="display: none;">
                                        <div class="file-preview" id="filePreview"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-buttons">
                            <div class="buttons">
                                <button type="button" class="cancel-button" onclick="closeModal()">Cancel</button>
                                <button type="button" class="print-receipt-button" onclick="printReceipt()">Print Receipt</button>
                                <button type="submit" class="save-as-drafts-button" name="action" value="draft">Save as Drafts</button>
                                <button type="submit" class="save-and-route-button" name="action" value="save-and-route" id="mainActionButton">Save & Route</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</body>
</html>