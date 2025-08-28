<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            background-image : url('https://img.freepik.com/premium-photo/blue-purple-circuit-technology-background_274326-391.jpg');
            background-repeat: no-repeat;
            background-size: cover; 
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

		.container {
            background: 0 20px 40px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 100%;
            max-width: 500px;
            transform: translateY(0);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .container:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }

		.header {
            text-align: center;
            margin-bottom: 30px;
        }
        .header h1 {
           width: 100%;
            padding: 18px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1.2rem;
            font-weight: 600;
            cursor: pointer;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
		 .header p {
            color: white;
            font-size: 1.1rem;
        }
        .form-group {
            margin-bottom: 25px;
            position: relative;
        }

		.form-group label {
            display:white;
            margin-bottom: 8px;
            font-weight: 600;
            color:white;
            font-size: 1.1rem;
        }

		.form-group input,
        .form-group select {
            width: 100%;
            padding: 15px;
            border: 2px solid #e1e5e9;
            border-radius: 12px;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            background: #f8f9fa;
        }

		.form-group input:focus,
        .form-group select:focus {
            outline: none;
            border-color: #667eea;
            background: white;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            transform: translateY(-2px);
        }
        .form-group input::placeholder {
            color: #999;
        }

		.submit-btn {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, #ea6666ff 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1.2rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

		 .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
        }
        .submit-btn:active {
            transform: translateY(0);
        }
        .required::after {
            content: " *";
            color: #e74c3c;
        }

		.form-group small {
            display: block;
            margin-top: 5px;
            color: #666;
            font-size: 0.9rem;
        }

		 (max-width: 600px) {
            .container {
                padding: 30px 20px;
                margin: 10px;
            }
            
            .header h1 {
                font-size: 2rem;
            }
		}

		.success-message {
            display: none;
            background: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 8px;
            margin-top: 20px;
            text-align: center;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Student Registration</h1>
            <p>Complete your academic profile</p>
        </div>
        <form action="display.php" method="post">
            <div class="form-group">
                <label for="IdNum" class="required">STUDENT ID NO.</label>
                <input type="text" id="IdNum" name="IdNum" placeholder="Enter your student ID number" required>
            </div>

			<div class="form-group">
                <label for="firstName" class="required">First Name</label>
                <input type="text" id="firstName" name="firstName" placeholder="Enter your first name" required>
            </div>
            <div class="form-group">
                <label for="lastName" class="required">Last Name</label>
                <input type="text" id="lastName" name="lastName" placeholder="Enter your last name" required>
            </div>
            <div class="form-group">
                <label for="age" class="required">Age</label>
                <input type="number" id="age" name="age" placeholder="Enter your age" min="18" max="30" required>
            </div>

			 <div class="form-group">
                <label for="course" class="required">Course</label>
                <select id="course" name="course" required>
                    <option value="">Select your course</option>
                    <option value="BSIT">Bachelor of Science in Information Technology</option>
                    <option value="BSCS">Bachelor of Science in Computer Science</option>
                    <option value="BSIS">Bachelor of Science in Information Systems</option>
                    <option value="BSCE">Bachelor of Science in Computer Engineering</option>
                </select>
            </div>

			 <button type="submit" class="submit-btn">Register Now</button>
        </form>
    </div>
</body>
</html>
