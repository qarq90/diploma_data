import javax.swing.*;
import javax.swing.JFrame;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.MouseAdapter;
import java.awt.event.MouseEvent;
import java.net.InetAddress;
import java.util.ArrayList;
import java.util.Random;

public class MP {
    public static void main(String[] args) {
        new Project();
    }
}

class Project {
    Project() {
        new AppFrame();
    }
}

class ServerIP extends JFrame implements ActionListener {
    private final JRadioButton singapore = new JRadioButton("Singapore");
    private final JRadioButton usa = new JRadioButton("United States of America");
    private final JRadioButton uk = new JRadioButton("United Kingdom");
    private final JRadioButton germany = new JRadioButton("Germany");
    private final JRadioButton japan = new JRadioButton("Japan");
    private final JLabel result = new JLabel();

    public ServerIP() {

        JFrame App = new JFrame("Connecting to a Server");
        App.setSize(480, 240);
        App.setVisible(true);
        App.setLocationRelativeTo(null);
        getContentPane().setBackground(Color.BLACK);
        App.setDefaultCloseOperation(JFrame.HIDE_ON_CLOSE);

        JLabel Title = new JLabel();
        Title.setText("Stealth VPN");
        Title.setBounds(190, 150, 200, 30);
        Title.setFont(new Font("SansSerif", Font.PLAIN, 25));
        Title.setForeground(Color.GRAY);

        ImageIcon TitleIcon = new ImageIcon("Internet_512px.png");
        JLabel TitleBtn = new JLabel(TitleIcon);
        TitleBtn.setBackground(Color.GRAY);
        TitleBtn.setBounds(120, 120, 75, 75);

        // create radio button group
        ButtonGroup group = new ButtonGroup();
        group.add(singapore);
        group.add(usa);
        group.add(uk);
        group.add(germany);
        group.add(japan);

        // add components to the content pane
        JPanel panel = new JPanel();

        panel.setLocation(20,100);

        JLabel l = new JLabel("Choose a server:");
        //l.setText("Stealth VPN");
        l.setBounds(120, 80, 200, 30);
        l.setFont(new Font("SansSerif", Font.PLAIN, 25));
        l.setForeground(Color.WHITE);

        panel.add(singapore);
        panel.add(usa);
        panel.add(uk);
        panel.add(germany);
        panel.add(japan);
        JButton select = new JButton("Select");
        panel.add(select);
        panel.add(result);

        panel.setBackground(Color.BLACK);

        //panel.setLocation(100,100);

        App.add(Title);
        App.add(TitleBtn);
        App.add(l);
        App.add(panel);

        // register action listener for the select button
        App.getContentPane().setBackground(Color.BLACK);
        select.addActionListener(this);
    }

    public void actionPerformed(ActionEvent e) {
        if (singapore.isSelected()) {
            result.setText(ipProvider(new int[]{0,1,32,255,0,255,0,255}));
        } else if (usa.isSelected()) {
            result.setText(ipProvider(new int[]{2,2,0,255,0,255,0,255}));
        } else if (uk.isSelected()) {
            result.setText(ipProvider(new int[]{2,92,0,255,0,255,0,255}));
        } else if (germany.isSelected()) {
            result.setText(ipProvider(new int[]{89,145,0,255,0,255,0,255}));
        } else if (japan.isSelected()) {
            result.setText(ipProvider(new int[]{133,150,0,255,0,255,0,255}));
        }
    }

    public String ipProvider(int[] a) {
        ArrayList<Integer> proIp = new ArrayList<>();
        for (int i = 0; i < 4; i++) {
            int z = 1;
            while (z < 2) {
                Random random = new Random();
                int min = a[i * 2];
                int max = a[i * 2 + 1] + 1;
                int rn = random.nextInt(max - min) + min;
                proIp.add(rn);
                z++;
            }
        }
        StringBuilder ip = new StringBuilder();
        for (int i = 0; i < proIp.size(); i++) {
            ip.append(proIp.get(i));
            if (i != proIp.size() - 1) {
                ip.append(".");
            }
        }
        ip.insert(0, "Your new IP address is: ");
        return ip.toString();
    }
}

class AppFrame extends JFrame {

    AppFrame() {

        JFrame App = new JFrame("Stealth VPN | JPR Micro-Project");
        App.setSize(640, 480);
        App.setVisible(true);
        App.setLocationRelativeTo(null);
        getContentPane().setBackground(Color.BLACK);
        App.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

        JLabel Title = new JLabel();
        Title.setText("Stealth VPN");
        Title.setBounds(250, 30, 200, 30);
        Title.setFont(new Font("SansSerif", Font.PLAIN, 25));
        Title.setForeground(Color.GRAY);

        ImageIcon TitleIcon = new ImageIcon("Internet_512px.png");
        JLabel TitleBtn = new JLabel(TitleIcon);
        TitleBtn.setBackground(Color.GRAY);
        TitleBtn.setBounds(150, 10, 75, 75);

        ImageIcon userIcon = new ImageIcon("user_500px.png");
        JLabel userBtn = new JLabel(userIcon);
        userBtn.setBackground(Color.GRAY);
        userBtn.setBounds(10, 200, 75, 75);

        userBtn.addMouseListener(new MouseAdapter() {
            public void mouseClicked(MouseEvent e) {

                JLabel ipTitle = new JLabel();
                ipTitle.setText("Stealth VPN");
                ipTitle.setBounds(180, 30, 200, 30);
                ipTitle.setFont(new Font("SansSerif", Font.PLAIN, 25));
                ipTitle.setForeground(Color.GRAY);

                ImageIcon ipTitleIcon = new ImageIcon("Internet_512px.png");
                JLabel ipTitleBtn = new JLabel(ipTitleIcon);
                ipTitleBtn.setBackground(Color.GRAY);
                ipTitleBtn.setBounds(100, 10, 75, 75);

                String ipAdd = "Your current IP address is :";
                try {
                    InetAddress ip = InetAddress.getLocalHost();
                    ipAdd = ip.getHostAddress();
                } catch (Exception ipException) {
                    System.out.println("Unable to get IP");
                }

                JFrame ipFrame = new JFrame("Original IP Address");
                ipFrame.setSize(480, 240);
                ipFrame.setVisible(true);
                ipFrame.setLocationRelativeTo(null);
                getContentPane().setBackground(Color.BLACK);
                ipFrame.setDefaultCloseOperation(JFrame.HIDE_ON_CLOSE);

                JLabel IP = new JLabel();
                IP.setText("Your Original IP Address is : " + ipAdd);
                IP.setFont(new Font("SansSerif", Font.PLAIN, 20));
                IP.setForeground(Color.GRAY);

                ipFrame.getContentPane().setBackground(Color.BLACK);

                ipFrame.add(ipTitle);
                ipFrame.add(ipTitleBtn);
                ipFrame.add(IP);
            }
        });

        ImageIcon helpIcon = new ImageIcon("help_480px.png");
        JLabel helpBtn = new JLabel(helpIcon);
        helpBtn.setBackground(Color.GRAY);
        helpBtn.setBounds(10, 300, 75, 75);

        helpBtn.addMouseListener(new MouseAdapter() {
            public void mouseClicked(MouseEvent e) {

                JFrame ipFrame1 = new JFrame("Help");
                ipFrame1.setSize(480, 240);
                ipFrame1.setVisible(true);
                ipFrame1.setLocationRelativeTo(null);
                getContentPane().setBackground(Color.BLACK);
                ipFrame1.setDefaultCloseOperation(JFrame.HIDE_ON_CLOSE);

                JLabel ipTitle11 = new JLabel();
                ipTitle11.setText("Stealth VPN");
                ipTitle11.setBounds(180, 30, 200, 30);
                ipTitle11.setFont(new Font("SansSerif", Font.PLAIN, 25));
                ipTitle11.setForeground(Color.GRAY);

                ImageIcon ipTitleIcon1 = new ImageIcon("Internet_512px.png");
                JLabel ipTitleBtn1 = new JLabel(ipTitleIcon1);
                ipTitleBtn1.setBackground(Color.GRAY);
                ipTitleBtn1.setBounds(100, 10, 75, 75);

                JLabel ipTitle1 = new JLabel();
                ipTitle1.setText("Select your desired country and check the IP Address");
                ipTitle1.setBounds(180, 30, 200, 30);
                ipTitle1.setFont(new Font("SansSerif", Font.PLAIN, 18));
                ipTitle1.setForeground(Color.GRAY);

                ipFrame1.getContentPane().setBackground(Color.BLACK);

                ipFrame1.add(ipTitle11);
                ipFrame1.add(ipTitleBtn1);
                ipFrame1.add(ipTitle1);
            }
        });

        ImageIcon wIcon = new ImageIcon("world_500px.png");
        JLabel wBtn = new JLabel(wIcon);
        wBtn.setBackground(Color.GRAY);
        wBtn.setBounds(200, 70, 300, 300);

        ImageIcon cIcon = new ImageIcon("country_500px.png");
        JLabel cBtn = new JLabel(cIcon);
        cBtn.setBackground(Color.GRAY);
        cBtn.setBounds(10, 100, 75, 75);

        cBtn.addMouseListener(new MouseAdapter() {
            public void mouseClicked(MouseEvent e) {

//                Frame ipFrame12 = new JFrame("Select Country");
//                ipFrame12.setSize(480, 240);
//                ipFrame12.setVisible(true);
//                ipFrame12.setLocationRelativeTo(null);
//                getContentPane().setBackground(Color.BLACK);
//                ((JFrame) ipFrame12).setDefaultCloseOperation(JFrame.HIDE_ON_CLOSE);

                final JRadioButton singapore = new JRadioButton("Singapore");
                final JRadioButton usa = new JRadioButton("United States of America");
                final JRadioButton uk = new JRadioButton("United Kingdom");
                final JRadioButton germany = new JRadioButton("Germany");
                final JRadioButton japan = new JRadioButton("Japan");
                final JButton select = new JButton("Select");
                final JLabel result = new JLabel();

                ServerIP serverIP = new ServerIP();
                serverIP.setVisible(true);

                //((JFrame) ipFrame12).getContentPane().setBackground(Color.BLACK);
            }
        });
        JButton CloseBtn = new JButton("Close");
        CloseBtn.setBackground(Color.GRAY);
        CloseBtn.setForeground(Color.BLACK);
        CloseBtn.setFont(new Font("SansSerif", Font.PLAIN, 16));
        CloseBtn.setBorder(BorderFactory.createEmptyBorder());

        CloseBtn.setBounds(510, 400, 100, 30);
        CloseBtn.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                System.exit(0);
            }
        });

        App.getContentPane().setBackground(Color.BLACK);


        App.add(Title);
        App.add(TitleBtn);
        App.add(cBtn);
        App.add(wBtn);
        App.add(userBtn);
        App.add(helpBtn);
        App.add(CloseBtn);
    }
}
