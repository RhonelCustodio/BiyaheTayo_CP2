<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal - Language Dictionary</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="https://img.icons8.com/?size=100&id=2RQtjtyEYfCP&format=png&color=000000">
</head>
<body>
    <!-- Login Modal -->
    <div id="loginModal" class="login-modal">
        <div class="login-container">
            <h2>Admin</h2>
            <form id="loginForm">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" required>
                </div>
                <input type="submit" class="btn btn-primary">
            </form>
        </div>
    </div>

    <!-- Admin Dashboard -->
    <div id="adminDashboard" class="admin-dashboard hidden">
        <!-- Header -->
        <header class="admin-header">
            <div class="header-container">
                <h1>Language Dictionary Admin Portal</h1>
                <button id="logoutBtn" class="btn-logout">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </button>
            </div>
        </header>

        <!-- Main Content -->
        <main class="admin-main">
            <div class="admin-layout">
                <!-- Sidebar -->
                <aside class="admin-sidebar">
                    <nav>
                        <ul>
                            <li>
                                <button id="profileTab" class="sidebar-btn active">
                                    <i class="fas fa-user-circle"></i> My Profile
                                </button>
                            </li>
                            <li>
                                <button id="dictionaryTab" class="sidebar-btn">
                                    <i class="fas fa-book"></i> Dictionary Management
                                </button>
                            </li>
                            <li>
                                <button id="feedbackTab" class="sidebar-btn">
                                    <i class="fas fa-comment-alt"></i> User Feedback
                                </button>
                            </li>
                        </ul>
                    </nav>
                </aside>

                <!-- Content Area -->
                <div class="admin-content">
                    <!-- Profile Section -->
                    <section id="profileSection" class="content-section">
                        <h2>Admin Profile</h2>
                        <div class="profile-grid">
                            <div class="profile-field">
                                <label>Full Name</label>
                                <p id="adminFullName">John Doe</p>
                            </div>
                            <div class="profile-field">
                                <label>Email</label>
                                <p id="adminEmail">admin@example.com</p>
                            </div>
                        </div>
                        <button id="editProfileBtn" class="btn btn-primary">
                            <i class="fas fa-edit"></i> Edit Profile
                        </button>

                        <!-- Edit Profile Form -->
                        <form id="editProfileForm" class="edit-form hidden">
                            <div class="form-grid">
                                <div class="form-group">
                                    <label for="editFullName">Full Name</label>
                                    <input type="text" id="editFullName" required>
                                </div>
                                <div class="form-group">
                                    <label for="editEmail">Email</label>
                                    <input type="email" id="editEmail" required>
                                </div>
                                <div class="form-group">
                                    <label for="currentPassword">Current Password</label>
                                    <input type="password" id="currentPassword">
                                </div>
                                <div class="form-group">
                                    <label for="newPassword">New Password</label>
                                    <input type="password" id="newPassword">
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                <button type="button" id="cancelEditBtn" class="btn btn-secondary">Cancel</button>
                            </div>
                        </form>
                    </section>

                    <!-- Dictionary Management Section -->
                    <section id="dictionarySection" class="content-section hidden">
                        <div class="section-header">
                            <h2>Dictionary Management</h2>
                            <div class="section-actions">
                                <button id="addEntryBtn" class="btn btn-success">
                                    <i class="fas fa-plus"></i> Add Entry
                                </button>
                                <div class="select-wrapper">
                                    <select id="languageFilter">
                                        <option value="all">All Languages</option>
                                        <option value="ilocano">Ilocano</option>
                                        <option value="kapampangan">Kapampangan</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Dictionary Table -->
                        <div class="table-container">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Term</th>
                                        <th>Translation</th>
                                        <th>Language</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="dictionaryTableBody">
                                    <!-- Filled by JavaScript -->
                                </tbody>
                            </table>
                        </div>

                        <!-- Entry Modal -->
                        <div id="entryModal" class="modal hidden">
                            <div class="modal-content">
                                <h3 id="modalTitle">Add New Dictionary Entry</h3>
                                <form id="entryForm">
                                    <input type="hidden" id="entryId" name="entry_id">
                                    <div class="form-group">
                                        <label for="entryTerm">Term</label>
                                        <input type="text" id="entryTerm" name="entry_term" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="entryTranslation">Translation</label>
                                        <input type="text" id="entryTranslation" name="entry_Translation" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="entryLanguage">Language</label>
                                        <select id="entryLanguage" required>
                                            <option value="ilocano">Ilocano</option>
                                            <option value="kapampangan">Kapampangan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="entryExample">Example Usage</label>
                                        <textarea id="entryExample" rows="3"></textarea>
                                    </div>
                                    <div class="form-actions">
                                        <button type="button" id="cancelEntryBtn" class="btn btn-secondary">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>

                    <!-- Feedback Section -->
                    <section id="feedbackSection" class="content-section hidden">
                        <h2>User Feedback</h2>
                        <div class="table-container">
                            <table>
                                <tbody id="feedbackTableBody">
                                    <!-- Filled by JavaScript -->
                                        <?php
                                            // 1. Create connection
                                            $conn = new mysqli("localhost", "root", "", "cp2_admin_users");

                                            // Check connection
                                            if ($conn->connect_error) {
                                                die("Connection failed: " . $conn->connect_error);
                                            }

                                            // 2. Execute query
                                            $sql = "SELECT * FROM admin_users_new";
                                            $result = $conn->query($sql);

                                            // 3. Display styled table
                                            echo '<style>
                                                .feedback-table {
                                                    width: 100%;
                                                    border-collapse: collapse;
                                                    margin: 20px 0;
                                                    font-family: Segoe UI, Tahoma, Geneva, Verdana, sans-serif;
                                                    box-shadow: 0 2px 3px rgba(0,0,0,0.1);
                                                }
                                                
                                                .feedback-table th {
                                                    background-color: #4CAF50;
                                                    color: white;
                                                    text-align: left;
                                                    padding: 12px;
                                                    font-weight: bold;
                                                }
                                                
                                                .feedback-table td {
                                                    padding: 12px;
                                                    border-bottom: 1px solid #ddd;
                                                }
                                                
                                                .feedback-table tr:nth-child(even) {
                                                    background-color: #f2f2f2;
                                                }
                                                
                                                .feedback-table tr:hover {
                                                    background-color: #e9e9e9;
                                                }
                                                
                                                .feedback-table .feedback-cell {
                                                    max-width: 300px;
                                                    word-wrap: break-word;
                                                }
                                            </style>';

                                            if ($result->num_rows > 0) {
                                                echo '<table class="feedback-table">';
                                                echo '<thead><tr>
                                                        <th>Full Name</th>
                                                        <th>Feedback</th>
                                                        <th>Email</th>
                                                    </tr></thead>';
                                                echo '<tbody>';
                                                
                                                while($row = $result->fetch_assoc()) {
                                                    echo '<tr>';
                                                    echo '<td>'.htmlspecialchars($row["Fullname"]).'</td>';
                                                    echo '<td class="feedback-cell">'.htmlspecialchars($row["Feedback"]).'</td>';
                                                    echo '<td>'.htmlspecialchars($row["Email"]).'</td>';
                                                    echo '</tr>';
                                                }
                                                
                                                echo '</tbody></table>';
                                            } else {
                                                echo '<div class="no-results">No feedback found</div>';
                                            }

                                            // 4. Close connection
                                            $conn->close();
                                            ?>
                                </tbody>
                            </table>
                        </div>

                        <!-- Feedback Modal -->
                        <div id="feedbackModal" class="modal hidden">
                            <div class="modal-content wide-modal">
                                <div class="modal-header">
                                    <h3 id="feedbackModalTitle">Feedback Details</h3>
                                    <button id="closeFeedbackModal" class="btn-close">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                                <div class="modal-grid">
                                    <div class="modal-field">
                                        <label>User</label>
                                        <p id="feedbackUser">-</p>
                                    </div>
                                    <div class="modal-field">
                                        <label>Date</label>
                                        <p id="feedbackDate">-</p>
                                    </div>
                                    <div class="modal-field">
                                        <label>Email</label>
                                        <p id="feedbackEmail">-</p>
                                    </div>
                                    <div class="modal-field">
                                        <label>Status</label>
                                        <p id="feedbackStatus">-</p>
                                    </div>
                                </div>
                                <div class="modal-field full-width">
                                    <label>Feedback</label>
                                    <p id="feedbackContent">-</p>
                                </div>
                                <div class="modal-actions">
                                    <div class="action-buttons">
                                        <button id="markResolvedBtn" class="btn btn-success">
                                            Mark as Resolved
                                        </button>
                                        <button id="markPendingBtn" class="btn btn-warning">
                                            Mark as Pending
                                        </button>
                                    </div>
                                    <button id="deleteFeedbackBtn" class="btn btn-danger">
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </main>
    </div>
    <script src="script-admin.js"></script>
</body>
</html>