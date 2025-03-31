<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description"    content="Available Jobs Page">
    <meta name="keywords"       content="HTML, CSS, PHP">
    <meta name="author"         content="Trong Hieu Huynh">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs - ITJobFinder</title>
    <link href="styles/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Limelight&display=swap" rel="stylesheet">
</head>
<body>
<?php
    include "header.inc";
?>
<main>
    <h1>Available Jobs</h1>
    <div class="jobs-container">
        <div class="jobs">
        <img src="images/frontend.png" alt="Frontend Developer image">
        <h2>Frontend Developer</h2>
        <p><strong>Reference Number: </strong>FE001</p>
        <p><strong>Company: </strong>Spring Breakers Inc.</p>
        <h3>Job Summary:</h3>
        <p>Responsible for designing and implementing the user interface (UI) and user experience (UX) of websites and applications, ensuring they are visually appealing, responsive, and user-friendly.</p>
        <h3>Responsibilities:</h3>
        <ul>
            <li>Develop and maintain the frontend of websites and applications.</li>
            <li>Collaborate with designers to translate UI/UX designs into functional code.</li>
            <li>Optimize applications for maximum speed and scalability.</li>
            <li>Ensure cross-browser and cross-device compability.</li>
            <li>Debug and resolve frontend issues.</li>
        </ul>
        <h3>Qualifications:</h3>
        <h4>Essential:</h4>
        <ol>
            <li>Profiency in HTML, CSS, and JavaScript.</li>
            <li>Experience with frontend frameworks (e.g., React, Angular).</li>
            <li>Strong understanding of responsive design.</li>
            <li>Familiarity with version control systems (e.g., Git).</li>
        </ol>
        <h4>Preferable:</h4>
        <ol>
            <li>Knowledge of UI/UX design principals</li>
            <li>Experience with testing frameworks (e.g., Jest, Cypress).</li>
            <li>Familiarity with backend technology (e.g., Node.js)</li>
            <li>Teamwork and collaboration skill.</li>
        </ol>
        <p><strong>Salary: </strong>70,000 - 120,000<span>&#36;</span>/year (depending on experience)</p>
        <p><strong>Benefits: </strong>Health insurance, remote work options, flexible work hours, professional development opportunities, and performance bonuses.</p>
        <p id="apply"><a href="apply.php">Apply now!</a></p>
        </div>
        <div class="jobs">
        <img src="images/backend.png" alt="Backend Developer image">
        <h2>Backend Developer</h2>
        <p><strong>Reference Number: </strong>BE002</p>
        <p><strong>Company: </strong>Thropp-Upland Studios</p>
        <h3>Job Summary:</h3>
        <p>Focuses on server-side logic, databases, and application architecture, ensuring the website or application functions seamlessly and securely.</p>
        <h3>Responsibilities:</h3>
        <ul>
            <li>Develop and maintain server-side logic using Python and Java.</li>
            <li>Design and manage databases using MySQL.</li>
            <li>Build and maintain APIs for frontend-backend communication.</li>
            <li>Ensure data security and compliance with industry standards.</li>
            <li>Optimize applications for performance and scalability.</li>
        </ul>
        <h3>Qualifications:</h3>
        <h4>Essential:</h4>
        <ol>
            <li>Profiency in backend programming languages (e.g., Python, Java, Ruby).</li>
            <li>Experience with database management (e.g., MySQL).</li>
            <li>Knowledge of API development (e.g., REST, GraphQL).</li>
            <li>Familiarity with version control systems (e.g., Git).</li>
        </ol>
        <h4>Preferable:</h4>
        <ol>
            <li>Experience with cloud platforms (e.g., AWS, Azure).</li>
            <li>Knowledge of containerization tools (e.g., Docker, Kubernetes).</li>
            <li>Familiarity with DevOps practices.</li>
        </ol>
        <p><strong>Salary: </strong>80,000 - 130,000<span>&#36;</span>/year (depending on experience)</p>
        <p><strong>Benefits: </strong>Health insurance, remote work options, flexible work hours, professional development opportunities, and performance bonuses.</p>
        <p id="apply"><a href="apply.php">Apply now!</a></p>
        </div>
        <div class="jobs">
        <img src="images/webdev.png" alt="Web Developer image">
        <h2>Web Developer</h2>
        <p><strong>Reference Number: </strong> WD003</p>
        <p><strong>Company: </strong>Pump It Up!</p>
        <h3>Job Summary:</h3>
        <p>Responsible for building and maintaining websites, ensuring they are functional, visually appealing, and user-friendly.</p>
        <h3>Responsibilities:</h3>
        <ul>
            <li>Develop and maintain websites using HTML, CSS, JavaScript, and backend technology.</li>
            <li>Collaborate with designers and stakeholders to implement website features.</li>
            <li>Test and debug websites to ensue functionality and performance.</li>
            <li>Optimize websites for search engines (SEO) and mobile devices.</li>
            <li>Update website contents and features as needed.</li>
        </ul>
        <h3>Qualifications:</h3>
        <h4>Essential:</h4>
        <ol>
            <li>Profiency in HTML, CSS, and JavaScript.</li>
            <li>Experience with backend languages (e.g., PHP, Python).</li>
            <li>Knowledge of web performance optimization.</li>
            <li>Familiarity with version control systems (e.g., Git).</li>
        </ol>
        <h4>Preferable:</h4>
        <ol>
            <li>Experience with content management systems (e.g., WordPress).</li>
            <li>Knowledge of best SEO practices.</li>
            <li>Familiarity with frontend frameworks (e.g., React, Angular).</li>
        </ol>
        <p><strong>Salary: </strong>60,000 - 100,000<span>&#36;</span>/year (depending on experience)</p>
        <p><strong>Benefits: </strong>Health insurance, remote work options, flexible work hours, paid time off, and performance bonuses.</p>
        <br>
        <p id="apply"><a href="apply.php">Apply now!</a></p>
        </div>
        <div class="jobs">
        <img src="images/manager.png" alt="Project Manager image">
        <h2>Project Manager</h2>
        <p><strong>Reference Number: </strong> PM004</p>
        <p><strong>Company: </strong>Team Aquamarine</p>
        <h3>Job Summary:</h3>
        <p>Responsible for building and maintaining websites, ensuring they are functional, visually appealing, and user-friendly.</p>
        <h3>Responsibilities:</h3>
        <ul>
            <li>Define project scope, goals, and deliverables.</li>
            <li>Develop project plans, timelines, and budgets.</li>
            <li>Coordinate cross-functional teams to ensure project success.</li>
            <li>Monitor project progress and resolve issues.</li>
            <li>Communicate with stakeholders and provide regular updates.</li>
        </ul>
        <h3>Qualifications:</h3>
        <h4>Essential:</h4>
        <ol>
            <li>Proven experience in project management.</li>
            <li>Strong leadership and communication skills.</li>
            <li>Profiency in project management tools (e.g., Jira, Atlassian, Trello).</li>
            <li>Knowledge of Agile and Scrum methodologies.</li>
        </ol>
        <h4>Preferable:</h4>
        <ol>
            <li>Project Management Professional (PMP) certification or equivalent.</li>
            <li>Experience in the tech industry.</li>
            <li>Familiarity with software development lifecycles.</li>
        </ol>
        <p><strong>Salary: </strong>90,000 - 140,000<span>&#36;</span>/year (depending on experience)</p>
        <p><strong>Benefits: </strong>Health insurance, retirement plans, professional development opportunities, and performance bonuses.</p>
        <br> <br>
        <p id="apply"><a href="apply.php">Apply now!</a></p>
        </div>
        <div class="jobs">
        <img src="images/devops.png" alt="DevOps image">
        <h2>DevOps Engineer</h2>
        <p><strong>Reference Number: </strong> DOE05</p>
        <p><strong>Company: </strong>Tick-Tack Industries</p>
        <h3>Job Summary:</h3>
        <p>Bridges the gap between development and operations teams, ensuring seamless deployment, monitoring, and maintenance of applications.</p>
        <h3>Responsibilities:</h3>
        <ul>
            <li>Automate and streamline deployment processes using CI/CD pipelines.</li>
            <li>Manage and monitor cloud infrastructure (e.g., AWS, Azure).</li>
            <li>Implement and maintain containerization tools (e.g., Docker, Kubernetes).</li>
            <li>Ensure system reliability, scalability, and security.</li>
            <li>Collaborate with development and operations teams to resolve issues.</li>
        </ul>
        <h3>Qualifications:</h3>
        <h4>Essential:</h4>
        <ol>
            <li>Profiency in scripting languages (e.g., Python, Bash).</li>
            <li>Experience with CI/CD tools (e.g., Jenkins, GitLab CI).</li>
            <li>Knowledge of cloud platforms (e.g., AWS, Azure).</li>
            <li>Familiarity with containerization tools (e.g., Docker, Kubernetes).</li>
        </ol>
        <h4>Preferable:</h4>
        <ol>
            <li>Experience with infrastructure-as-code tools (e.g., Terraform).</li>
            <li>Knowledge of monitoring tools (e.g., Prometheus, Grafana).</li>
            <li>Familiarity with best security practices.</li>
        </ol>
        <p><strong>Salary: </strong>100,000 - 150,000<span>&#36;</span>/year (depending on experience)</p>
        <p><strong>Benefits: </strong>Health insurance, remote work options, performance bonuses, and professional development stipends.</p>
        <p id="apply"><a href="apply.php">Apply now!</a></p>
        </div>
        <div class="jobs">
        <img src="images/data science.png" alt="Data Scientist image">
        <h2>Data Scientist</h2>
        <p><strong>Reference Number: </strong> DS006</p>
        <p><strong>Company: </strong>Gellaitry and Pantheress</p>
        <h3>Job Summary:</h3>
        <p>Analyzes complex data sets to extract insights, build predictive models, and support data-driven decision-making.</p>
        <h3>Responsibilities:</h3>
        <ul>
            <li>Collect, clean, and analyze large data sets.</li>
            <li>Develop and implement machine learning models.</li>
            <li>Visualize data and present findings to stakeholders.</li>
            <li>Collaborate with teams to identify data-driven solutions.</li>
            <li>Stay updated with the latest trends and technologies.</li>
        </ul>
        <h3>Qualifications:</h3>
        <h4>Essential:</h4>
        <ol>
            <li>Profiency in Python or R.</li>
            <li>Experience with machine learning frameworks (e.g., TensorFlow, Scikit-learn).</li>
            <li>Strong knowledge of statistics and data visualization tools (e.g., Tableau, Matplotlib).</li>
            <li>Familiarity with SQL and database management.</li>
        </ol>
        <h4>Preferable:</h4>
        <ol>
            <li>Experience with big data tools (e.g., Hadoop, Spark).</li>
            <li>Knowledge of deep learning techniques.</li>
            <li>Familiarity with cloud platforms (e.g., AWS, Azure).</li>
        </ol>
        <p><strong>Salary: </strong>110,000 - 160,000<span>&#36;</span>/year (depending on experience)</p>
        <p><strong>Benefits: </strong>Health insurance, retirement plans, flexible work hours, paid time off, and professional development opportunities.</p>
        <br>
        <p id="apply"><a href="apply.php">Apply now!</a></p>
        </div>
        <div class="jobs">
            <img src="images/qcengineer.png" alt="QC Engineer image">
            <h2>Quality Control Engineer</h2>
            <p><strong>Reference Number: </strong> QCE07</p>
            <p><strong>Company: </strong>Headlock Constructions</p>
            <h3>Job Summary:</h3>
            <p>Monitors and analyzes production processes, identifies defects or areas for improvement, and implements quality control measures to ensure compliance with industry standards and customer expectation.</p>
            <h3>Responsibilities:</h3>
            <ul>
                <li>Develop and implement quality control processes to ensure products meet standards.</li>
                <li>Conduct inspections and tests on materials and products to identify defects.</li>
                <li>Maintain detailed records of quality tests and corrective actions.</li>
                <li>Analyze production processes to recommend improvements and ensure compliance.</li>
                <li>Investigate customer complaints and product failures to resolve quality issues.</li>
            </ul>
            <h3>Qualifications:</h3>
            <h4>Essential:</h4>
            <ol>
                <li>Bachelor's degree in Engineering, Quality Management, or a related field.</li>
                <li>2-5 years of experience in quality control or assurance, preferably in a manufacturing or production environment.</li>
                <li>Proficiency in quality control tools and methodologies (e.g., statistical process control, Six Sigma, Lean Manufacturing).</li>
                <li>Strong problem-solving and data analysis skills to identify trends and root causes of quality issues.</li>
                <li>Ability to meticulously inspect products and processes to ensure compliance with standards.</li>
                <li>Familiarity with quality standards such as ISO 9001, AS9100, or similar.</li>
            </ol>
            <h4>Preferable:</h4>
            <ol>
                <li>Experience in a specific industry relevant to the employer (e.g., automotive, aerospace, pharmaceuticals).</li>
                <li>Knowledge of quality management software (e.g., Minitab, SAP Quality Management).</li>
                <li>Experience leading quality control teams or projects.</li>
            </ol>
            <p><strong>Salary: </strong>90,000 - 120,000<span>&#36;</span>/year (depending on experience)</p>
            <p><strong>Benefits: </strong>Health insurance, retirement plans, paid time off, professional development opportunities, and performance bonuses.</p>
            <br> <br> <br> <br>
            <p id="apply"><a href="apply.php">Apply now!</a></p>
        </div>
        <div class="jobs">
            <img src="images/salesrep.png" alt="Sales Rep image">
            <h2>Sales Representative</h2>
            <p><strong>Reference Number: </strong> SR008</p>
            <p><strong>Company: </strong>Friday Night Solutions</p>
            <h3>Job Summary:</h3>
            <p>Responsible for selling products or services to customers, building strong client relationships, and achieving sales targets.</p>
            <h3>Responsibilities:</h3>
            <ul>
                <li>Identify and pursue new sales opportunities through cold calling, networking, and referrals.</li>
                <li>Present, promote, and sell products/services to customers.</li>
                <li>Build and maintain strong relationships with existing and potential clients.</li>
                <li>Stay updated on industry trends, market conditions, and competitor activities.</li>
                <li>Collaborate with the marketing and product teams to align sales strategies.</li>
            </ul>
            <h3>Qualifications:</h3>
            <h4>Essential:</h4>
            <ol>
                <li>Proven experience in sales or a similar role.</li>
                <li>Strong customer service orientation.</li>
                <li>Excellent communication, negotiation, and interpersonal skills.</li>
                <li>Ability to work independently and as part of a team.</li>
                <li>Basic knowledge of Microsoft Office Suite (Word, Excel, PowerPoint).</li>
            </ol>
            <h4>Preferable:</h4>
            <ol>
                <li>Experience in the specific industry (e.g., tech).</li>
                <li>Knowledge of sales techniques and strategies (e.g., consultative selling).</li>
                <li>Familiarity with data analysis and reporting tools.</li>
                <li>A degree in Business, Marketing, or a related field.</li>
            </ol>
            <p><strong>Salary: </strong>70,000 - 130,000<span>&#36;</span>/year (depending on experience)</p>
            <p><strong>Benefits: </strong>Health insurance, retirement plans, flexible work hours, paid time off, life insurance, car allowance, professional development opportunities.</p>
            <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
            <p id="apply"><a href="apply.php">Apply now!</a></p>
        </div>
        <div class="jobs">
            <img src="images/networkarc.png" alt="Network Architect image">
            <h2>Network Architect</h2>
            <p><strong>Reference Number: </strong> NA009</p>
            <p><strong>Company: </strong>Abracadabra Networks</p>
            <h3>Job Summary:</h3>
            <p>Analyzes complex data sets to extract insights, build predictive models, and support data-driven decision-making.</p>
            <h3>Responsibilities:</h3>
            <ul>
                <li>Design and implement robust network architectures that support business and operational needs.</li>
                <li>Develop strategies for network security, performance, scalability, and redundancy.</li>
                <li>Manage network traffic, bandwidth, and data flow to ensure optimal performance.</li>
                <li>Document network configurations, processes, and procedures.</li>
                <li>Collaborate with cross-functional teams to integrate network infrastructure with applications and services.</li>
                <li>Ensure compliance with industry standards and best practices in network design and security.</li>
                <li>Evaluate and recommend network hardware, software, and technologies to enhance system capabilities.</li>
            </ul>
            <h3>Qualifications:</h3>
            <h4>Essential:</h4>
            <ol>
                <li>Expertise in networking protocols, such as TCP/IP, DNS, HTTP/HTTPS, and VPN technologies.</li>
                <li>Hands-on experience with network hardware (routers, switches, firewalls, etc.) and virtualized network environments.</li>
                <li>Experience with cloud networking (e.g., AWS, Azure, GCP).</li>
                <li>Proficiency with network monitoring tools (e.g., Wireshark, SolarWinds).</li>
                <li>Solid knowledge of routing and switching protocols (e.g., OSPF, BGP, VLANs).</li>
            </ol>
            <h4>Preferable:</h4>
            <ol>
                <li>Experience with network automation and orchestration tools (e.g., Ansible, Python scripting).</li>
                <li>Familiarity with SD-WAN, network virtualization, and software-defined networking (SDN).</li>
                <li>Certifications such as Cisco Certified Network Professional (CCNP), Juniper Networks Certified Internet Expert (JNCIE), or similar.</li>
            </ol>
            <p><strong>Salary: </strong>120,000 - 180,000<span>&#36;</span>/year (depending on experience)</p>
            <p><strong>Benefits: </strong>Health insurance, remote work options, retirement plans, flexible work hours, paid time off, and professional development opportunities.</p>
            <br> <br>
            <p id="apply"><a href="apply.php">Apply now!</a></p>
        </div>
    </div> <br>
    <aside><h1>More Jobs Coming Soon!</h1></aside> 
</main>
<?php
    include "footer.inc";
?>
</body>
</html>